<?php
// app/Filament/Resources/NavbarResource.php

namespace App\Filament\Resources;

use App\Filament\Resources\NavbarResource\Pages;
use App\Models\Navbar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class NavbarResource extends Resource
{
    protected static ?string $model = Navbar::class;

    // Icon hiển thị trên thanh điều hướng của Filament
    protected static ?string $navigationIcon = 'heroicon-o-bars-3-bottom-left'; 

    // Tên hiển thị trên menu
    protected static ?string $navigationLabel = 'Quản lý Menu';

    // Thứ tự trên menu
    protected static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name_vi')
                            ->label('Tên mục (Tiếng Việt)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('name_en')
                            ->label('Tên mục (Tiếng Anh)')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('url')
                            ->label('Đường dẫn (URL)')
                            ->placeholder('Ví dụ: / hoặc /#about')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('order')
                            ->label('Thứ tự hiển thị')
                            ->numeric()
                            ->required()
                            ->default(0),

                        Forms\Components\Toggle::make('is_active')
                            ->label('Hiển thị')
                            ->default(true)
                            ->required(),
                    ])
                    ->columns(2), // Chia form thành 2 cột
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->label('Thứ tự')
                    ->sortable(), // Cho phép sắp xếp theo cột này

                Tables\Columns\TextColumn::make('name_vi')
                    ->label('Tên (VI)')
                    ->searchable(), // Cho phép tìm kiếm theo cột này

                Tables\Columns\TextColumn::make('name_en')
                    ->label('Tên (EN)')
                    ->searchable(),

                Tables\Columns\TextColumn::make('url')
                    ->label('Đường dẫn'),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Hiển thị')
                    ->boolean(), // Hiển thị dưới dạng icon check/x
            ])
            ->filters([
                // (Bạn có thể thêm bộ lọc ở đây nếu cần)
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('order', 'asc'); // Mặc định sắp xếp theo thứ tự tăng dần
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNavbars::route('/'),
            'create' => Pages\CreateNavbar::route('/create'),
            'edit' => Pages\EditNavbar::route('/{record}/edit'),
        ];
    }    
}