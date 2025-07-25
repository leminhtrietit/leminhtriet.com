<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Spatie\Permission\Models\Role;
use Filament\Tables\Actions\Action;
use Hash;
use Filament\Forms\Components\FileUpload;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationLabel = 'Quản lí tài khoản';
    protected static ?string $pluralLabel = 'Quản lí tài khoản';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    
    // Thêm dòng này để nhóm Resource lại
    protected static ?string $navigationGroup = 'Account'; // Tên nhóm bạn muốn

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Đây là form schema dùng cho cả Create & Edit
                // Có thể để name, email, password...
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                Select::make('roles') // Thêm field roles
                    ->multiple()
                    ->relationship('roles', 'name') // Lấy tên vai trò từ quan hệ roles
                    ->preload() // Tải trước tất cả các vai trò (tùy chọn)
                    ->label('Có thể truy cập brach'), // Đặt label cho field
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('name')->label('Tên')->sortable()->searchable(),
            // TextColumn::make('email')->label('Email')->sortable()->searchable(),
            // TextColumn::make('identitynumber')->label('Passport'),
            TextColumn::make('email')->label('Email'),
            // TextColumn::make('roles.name')->label('Vai Trò')->sortable(),
            // TextColumn::make('created_at')->label('Ngày tạo')->dateTime(),
            // Cột hiển thị roles
            TextColumn::make('roles.name')->label('Vai Trò')->sortable(), // Hiển thị tên vai trò


        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            // Tables\Actions\DeleteAction::make(),
            Action::make('resetPassword')
                ->label('Đặt lại mật khẩu')
                ->action(function (User $record) {




            // Lấy identitynumber từ bảng personal_infos qua quan hệ personalInfo
            $identityNumber = $record->personalInfo->identitynumber ?? 'default-password';

            // Đặt mật khẩu mới bằng identitynumber đã mã hóa
            $newPassword = bcrypt($identityNumber);

            // Cập nhật mật khẩu mới cho người dùng
            $record->update(['password' => $newPassword]);
            
            // Gửi email
            Mail::to($record->email)->send(
                (new \App\Mail\ResetPasswordMail($record,"", $identityNumber))->buildResetPassword()
            );

            // Hiển thị thông báo thành công với identitynumber chưa hash
            \Filament\Notifications\Notification::make()
                ->title('Khôi phục mật khẩu thành công!')
                ->body("Đã gửi thông tin đăng nhập đến {$record->email}.")
                // ->body("Mật khẩu mới của {$record->email} là: **{$identityNumber}**")
                ->success()
                ->send();
            })
            ->requiresConfirmation()
            ->icon('heroicon-o-key'),
        ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function canCreate(): bool
    {
        return false; // Không cho phép tạo user
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    protected function syncRoles(User $record, array $roles): void
    {
        $record->roles()->syncWithPivotValues(
            $roles,
            ['model_type' => User::class] // Đảm bảo thêm model_type ở đây
        );
    }
}
