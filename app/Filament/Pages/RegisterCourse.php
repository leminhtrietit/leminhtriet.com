<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components\TextInput;
// use Filament\Forms\Components\Select; // Bỏ nếu không dùng
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Grid;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\PersonalInfo; // Model thông tin cá nhân
use App\Models\User;         // Model user
// Bỏ use Course, Subject, Payment nếu không dùng đến trong file này nữa
// use App\Models\Course;
// use App\Models\Subject;
// use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Filament\Notifications\Notification;
use Carbon\Carbon;
use Filament\Actions\Action;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class RegisterCourse extends Page
{
    // --- Navigation Settings ---
    protected static ?string $navigationIcon = 'heroicon-o-user-plus'; // Đổi icon nếu muốn
    protected static ?string $navigationLabel = 'Tạo User'; // Đổi tên menu
    protected static ?string $title = 'Tạo User'; // Đổi tiêu đề trang
    protected static ?int $navigationSort = 1;
    // protected static ?string $navigationGroup = 'Quản lý Học Viên'; // Nhóm khác nếu muốn
    // --- End Navigation Settings ---

    protected static string $view = 'filament.pages.register-course';

    // Form data state
    public ?array $data = [];
    // State để kiểm tra học viên tồn tại
    public bool $studentExists = false;
    // State để lưu thông báo tồn tại
    public ?string $existenceMessage = null;

    public function mount(): void
    {
        $this->form->fill();
    }

    // --- CCCD Helper Functions (private methods) ---

    // --- End Helper Functions ---

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Tìm kiếm')
                    ->schema([
                        TextInput::make('student_search')
                            ->label('Tìm kiếm (SĐT, Email hoặc CCCD)')
                            ->live(debounce: 500)
                            ->afterStateUpdated(function (Set $set, ?string $state) {
                                $this->studentExists = false;
                                $this->existenceMessage = null;
                                if (filled($state)) {
                                    $existingStudent = PersonalInfo::where('phone', $state)
                                                        // ->orWhere('email', $state)
                                                        ->orWhere('identitynumber', $state)
                                                        ->first();
                                    if ($existingStudent) {
                                        $this->studentExists = true;
                                        $this->existenceMessage = "Thông tin đã tồn tại: " . $existingStudent->name . " (". $state .")";
                                    }
                                }
                                $this->dispatch('update-form'); // Cập nhật giao diện
                            }),
                        Placeholder::make('existence_message_placeholder')
                             ->content(fn (): ?string => $this->existenceMessage)
                             ->visible(fn (): bool => $this->studentExists)
                             ->extraAttributes(['class' => 'text-success-600 dark:text-danger-400']),
                    ]),
                // --- Section Thông tin học viên mới ---
                // Chỉ hiển thị khi CHƯA tìm thấy học viên và đã nhập tìm kiếm
                Section::make('Thông tin học viên mới')
                    ->schema([
                         Grid::make(3) // CCCD, Tên, Ngày Sinh
                            ->schema([
                                TextInput::make('identitynumber')
                                    ->label('CCCD')
                                    ->required()
                                    ->mask('999999999999')
                                    ->rule('regex:/^\d{12}$/')
                                    ->unique(PersonalInfo::class, 'identitynumber', ignoreRecord: true)
                                    ->live(debounce: 500)
                                    ->afterStateUpdated(function (Set $set, ?string $state) {
                                        if ($this->isValidCCCD($state)) {
                                            $fullYear = $this->getFullYearFromCCCD($state);
                                            $set('dob', $fullYear ? ($fullYear . '-01-01') : null);
                                        } else {
                                            $set('dob', null);
                                        }
                                    }),
                                TextInput::make('name')
                                    ->label('Họ và Tên')
                                    ->required()
                                    ->maxLength(255),
                                DatePicker::make('dob')
                                    ->label('Ngày sinh'),
                            ]),
                        Grid::make(2) // Điện thoại, Email
                             ->schema([
                                TextInput::make('phone')
                                     ->label('Số điện thoại')
                                     ->required()
                                     ->unique(PersonalInfo::class, 'phone', ignoreRecord: true),
                                TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required()
                                    ->unique(User::class, 'email', ignoreRecord: true)
                             ]),
                        Textarea::make('address')
                            ->label('Địa chỉ')
                            ->columnSpanFull(),
                    ])
                    ->visible(fn (Get $get): bool => !$this->studentExists && filled($get('student_search'))),

                // --- BỎ HOÀN TOÀN Section Thông tin đăng ký & Thanh toán ---

            ])
            ->statePath('data')
            ->model(null);
    }

    // --- BỎ HÀM calculateAmountDue() ---
    // protected function calculateAmountDue(Set $set, ?float $baseFee = null): void { ... }

    // Phương thức create giờ chỉ tạo User và PersonalInfo
// Bên trong class RegisterCourse

    public function create(): void
    {
        $formData = $this->form->getState();
        // dd($formData);
        // --- SỬA LẠI QUERY KIỂM TRA TỒN TẠI ---
        // Kiểm tra lại bằng dữ liệu form, dùng exists() và đúng tên biến
        $existingStudentCheck = PersonalInfo::where('phone', $formData['phone'] ?? null) // <-- Sửa: Dùng $formData
                                    // Bỏ check email vì cột không tồn tại
                                    ->orWhere('identitynumber', $formData['identitynumber'] ?? null) // <-- Sửa: Dùng $formData
                                    ->exists(); // <-- Sửa: Dùng exists() để trả về true/false
        // --- KẾT THÚC SỬA QUERY ---

        if ($existingStudentCheck) { // <-- Sửa: Dùng đúng tên biến $existingStudentCheck
            Notification::make()
                ->title('Lỗi: Học viên đã tồn tại')
                ->body('Thông tin Số điện thoại hoặc CCCD đã tồn tại trong hệ thống.')
                ->danger()
                ->send();
            return; // Dừng thực thi
        }

        try {
            DB::transaction(function () use ($formData) {
                // Logic chỉ tạo User và PersonalInfo

                // 1. Lấy thông tin phát sinh từ CCCD
                $cccd = $formData['identitynumber'] ?? null;
                if (!$this->isValidCCCD($cccd)) {
                    throw new \Exception('Số CCCD không hợp lệ.');
                }
                $gender = $this->getGenderFromCCCD($cccd);
                $placeOfBirth = $this->getProvinceName($this->getProvinceCodeFromCCCD($cccd));

                // 2. Tạo User (Không có 'name' theo ERD)
                $tempPassword = bcrypt($cccd);
                $newUser = User::create([
                    'email' => $formData['email'],
                    'password' => bcrypt($cccd),
                ]);
                $userId = $newUser->id;
                $newUser->assignRole('student');

                // 3. Tạo PersonalInfo
                $personalInfo = PersonalInfo::create([
                    'user_id' => $userId,
                    'identitynumber' => $cccd,
                    'name' => $formData['name'],
                    'phone' => $formData['phone'],
                    // 'email' => $formData['email'], // <-- Sửa: Bỏ dòng này đi
                    'dateofbirth' => $formData['dob'] ?? null, // Giả sử form field là 'dob'
                    'address' => $formData['address'] ?? null,
                    'gender' => $gender,
                    'placeofbirth' => $placeOfBirth, // Giả sử cột DB là placeofbirth
                ]);
               // dd($newUser-> email);
                Mail::to($newUser-> email)->send(
                    (new \App\Mail\ResetPasswordMail($newUser))->buildCreateAccount()
                );
              //  \Mail::to($formData['email'])->send(new \App\Mail\VerifyEmailMail($newUser));

                // --- Gửi Thông báo ---
                Notification::make()
                    ->title('Tạo mới tài khoản thành công!')
                    ->body("Đã gửi thông tin đăng nhập đến {$formData['email']}. Yêu cầu người dùng đổi mật khẩu.")
                    ->success()
                    ->send();

                if ($tempPassword) {
                    Notification::make()
                        ->title('Đã tạo tài khoản User mới')
                        ->body("Đã gửi thông tin đăng nhập đến {$formData['email']}. Yêu cầu người dùng đổi mật khẩu.")
                        ->info()
                        ->persistent()
                        ->sendToDatabase(auth()->user());
                }

                // Reset form
                $this->form->fill();
                $this->studentExists = false; // Reset trạng thái
                $this->existenceMessage = null; // Reset thông báo

            }); // Kết thúc DB Transaction
        } catch (\Exception $e) {
            Notification::make()
                ->title('Đã xảy ra lỗi!')
                ->body($e->getMessage())
                // ->body('Không thể tạo học viên. Vui lòng thử lại.')
                ->danger()
                ->send();
        }
    }

    // Action cho nút submit
    protected function getFormActions(): array
    {
        return [
            Action::make('create')
                ->label('Lưu Học Viên Mới') // Đổi tên nút
                ->submit('create')
                ->disabled(fn (): bool => $this->studentExists), // Vẫn giữ disabled nếu tồn tại
        ];
    }

    // -------------------------
    // Các hàm helper cho xử lý CCCD
    // -------------------------
   // --- Đặt các hàm này vào bên trong class RegisterCourse ---

    /**
     * Kiểm tra CCCD hợp lệ (12 chữ số).
     */
    
    private function isValidCCCD(?string $cccd): bool { return !is_null($cccd) && strlen($cccd) === 12 && ctype_digit($cccd); }
    private function getProvinceCodeFromCCCD(?string $cccd): ?string { if (!$this->isValidCCCD($cccd)) { return null; } return substr($cccd, 0, 3); }
    private function getGenderFromCCCD(?string $cccd): ?string { if (!$this->isValidCCCD($cccd)) { return null; } $gc=$cccd[3]; switch ($gc){case '0': case '2': return 'male'; case '1': case '3': return 'female'; default: return null;} }
    private function getFullYearFromCCCD(?string $cccd): ?int { if (!$this->isValidCCCD($cccd)) { return null; } $cc=$cccd[3]; $yd=substr($cccd, 4, 2); switch ($cc){case '0': case '1': return (int)("19".$yd); case '2': case '3': return (int)("20".$yd); default: return null;} }
    /**
     * Lấy tên tỉnh từ mã tỉnh (Cần danh sách $provinceMap đầy đủ).
     */
    private function getProvinceName(?string $provinceCode): ?string
    {
        // Hàm này không gọi hàm khác trong class nên không cần $this
        if (is_null($provinceCode) || strlen($provinceCode) !== 3) {
            return null;
        }
        // *** Quan trọng: Bạn cần cập nhật danh sách này đầy đủ ***
        $provinceMap = [
            '001' => 'Thành phố Hà Nội', '079' => 'Thành phố Hồ Chí Minh', /* ... thêm tất cả các tỉnh khác ... */
            '002' => 'Tỉnh Hà Giang', '004' => 'Tỉnh Cao Bằng', '006' => 'Tỉnh Bắc Kạn', '008' => 'Tỉnh Tuyên Quang',
            '010' => 'Tỉnh Lào Cai', '011' => 'Tỉnh Điện Biên', '012' => 'Tỉnh Lai Châu', '014' => 'Tỉnh Sơn La',
            '015' => 'Tỉnh Yên Bái', '017' => 'Tỉnh Hoà Bình', '019' => 'Tỉnh Thái Nguyên', '020' => 'Tỉnh Lạng Sơn',
            '022' => 'Tỉnh Quảng Ninh', '024' => 'Tỉnh Bắc Giang', '025' => 'Tỉnh Phú Thọ', '026' => 'Tỉnh Vĩnh Phúc',
            '027' => 'Tỉnh Bắc Ninh', '030' => 'Tỉnh Hải Dương', '031' => 'Thành phố Hải Phòng', '033' => 'Tỉnh Hưng Yên',
            '034' => 'Tỉnh Thái Bình', '035' => 'Tỉnh Hà Nam', '036' => 'Tỉnh Nam Định', '037' => 'Tỉnh Ninh Bình',
            '038' => 'Tỉnh Thanh Hóa', '040' => 'Tỉnh Nghệ An', '042' => 'Tỉnh Hà Tĩnh', '044' => 'Tỉnh Quảng Bình',
            '045' => 'Tỉnh Quảng Trị', '046' => 'Tỉnh Thừa Thiên Huế', '048' => 'Thành phố Đà Nẵng', '049' => 'Tỉnh Quảng Nam',
            '051' => 'Tỉnh Quảng Ngãi', '052' => 'Tỉnh Bình Định', '054' => 'Tỉnh Phú Yên', '056' => 'Tỉnh Khánh Hòa',
            '058' => 'Tỉnh Ninh Thuận', '060' => 'Tỉnh Bình Thuận', '062' => 'Tỉnh Kon Tum', '064' => 'Tỉnh Gia Lai',
            '066' => 'Tỉnh Đắk Lắk', '067' => 'Tỉnh Đắk Nông', '068' => 'Tỉnh Lâm Đồng', '070' => 'Tỉnh Bình Phước',
            '072' => 'Tỉnh Tây Ninh', '074' => 'Tỉnh Bình Dương', '075' => 'Tỉnh Đồng Nai', '077' => 'Tỉnh Bà Rịa - Vũng Tàu',
            '080' => 'Tỉnh Long An', '082' => 'Tỉnh Tiền Giang', '083' => 'Tỉnh Bến Tre', '084' => 'Tỉnh Trà Vinh',
            '086' => 'Tỉnh Vĩnh Long', '087' => 'Tỉnh Đồng Tháp', '089' => 'Tỉnh An Giang', '091' => 'Tỉnh Kiên Giang',
            '092' => 'Thành phố Cần Thơ', '093' => 'Tỉnh Hậu Giang', '094' => 'Tỉnh Sóc Trăng', '095' => 'Tỉnh Bạc Liêu',
            '096' => 'Tỉnh Cà Mau',
        ];
        return $provinceMap[$provinceCode] ?? null;
    }

    // --- Kết thúc khối hàm helper ---
}
