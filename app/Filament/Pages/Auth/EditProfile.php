<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Pages\Auth\EditProfile as BaseEditProfile;
use Carbon\Carbon;
class EditProfile extends BaseEditProfile
{
    public function mount(): void
    {
        // Lấy user hiện tại
        $user = auth()->user();
        // Lấy personalInfo liên kết (nếu có)
        $personalInfo = $user->personalInfo;

        // Điền dữ liệu vào form
        $this->form->fill([
            'identitynumber' => $personalInfo->identitynumber ?? null,
            'name'           => $personalInfo->name ?? null,
            'dateofbirth'    => $personalInfo->dateofbirth ?? null,
            'placeofbirth'   => $personalInfo->placeofbirth ?? null,
            'address'        => $personalInfo->address ?? null,
            'gender'         => $personalInfo->gender ?? null,

            // Email được lấy từ bảng users
            'email'          => $user->email,
        ]);
    }
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('identitynumber')
                ->label('CCCD')
                ->disabled()
                ->dehydrated(true),

                // Hiển thị trường name
                TextInput::make('name')
                    ->label('Họ tên')
                    ->disabled()
                    ->dehydrated(true),


                // Thêm trường nơi sinh
                TextInput::make('placeofbirth')
                    ->label('Nơi sinh')
                    ->disabled()
                    ->dehydrated(true)
                    ->maxLength(255),


                // Thêm trường giới tính
                Select::make('gender')
                    ->label('Giới tính')
                    ->disabled()
                    ->options([
                        'male'   => 'Nam',
                        'female' => 'Nữ',
                    ])
                    ->dehydrated(true),
                                    // Thêm trường ngày sinh
                                    DatePicker::make('dateofbirth')
                                    ->label('Ngày sinh')
                                    ->displayFormat('d/m/Y')
                                    ->locale('vi')
                                    ->minDate(fn ($get) => 
                                        $get('dateofbirth') 
                                            ? Carbon::parse($get('dateofbirth'))->startOfYear() 
                                            : now()->startOfYear()
                                    )
                                    ->maxDate(fn ($get) => 
                                        $get('dateofbirth') 
                                            ? Carbon::parse($get('dateofbirth'))->endOfYear()    : now()->endOfYear()),

                // Thêm trường địa chỉ
                Textarea::make('address')
                    ->label('Địa chỉ')
                    ->rows(3),

                // Thêm trường CCCD

                // Các trường mặc định của Filament
                $this->getEmailFormComponent()                    ->disabled() ->dehydrated(true)
                ,
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
            ]);
    }
    // Khi submit form
    public function save(): void
    {
        $data = $this->form->getState();
        $user = auth()->user();

        // Lấy personalInfo hoặc tạo mới
        $personalInfo = $user->personalInfo ?? $user->personalInfo()->create([]);

        // Cập nhật bảng personal_infos
        $personalInfo->update([
            'identitynumber' => $data['identitynumber'],
            'name'           => $data['name'],
            'dateofbirth'    => $data['dateofbirth'],
            'placeofbirth'   => $data['placeofbirth'],
            'address'        => $data['address'],
            'gender'         => $data['gender'],
        ]);

        // Cập nhật email trong bảng users
        $user->update([
            'email' => $data['email'],
        ]);

        // Nếu có trường 'password' và bạn muốn thay đổi mật khẩu
        if (! empty($data['password'])) {
            $user->update([
                'password' => bcrypt($data['password']),
            ]);
        }


    }
}
