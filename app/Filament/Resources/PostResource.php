<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use App\Providers\AppServiceProvider;

use Filament\Forms\Components\Select;
use Illuminate\Validation\Rule;
use App\Models\User;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Carbon\Carbon;
use Illuminate\Support\Str; // Correct import

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Tools'; // Tên nhóm bạn muốn
    protected static ?int $navigationSort = 1; // Ví dụ: đặt ở vị trí số 5

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\RichEditor::make('content')
                    ->required(),
                Forms\Components\FileUpload::make('featured_image')
                    ->image()
                    ->directory('post-images'),
                Forms\Components\DateTimePicker::make('published_at'),
                Forms\Components\Select::make('categories')
                    ->relationship('categories', 'name')
                    ->multiple(),
                Forms\Components\Select::make('tags')
                    ->relationship('tags', 'name')
                    ->multiple(),
                Forms\Components\Toggle::make('is_active') // Thêm trường is_active
                    ->label('Hiển thị')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime(),
                Tables\Columns\BooleanColumn::make('is_active') // Thêm cột is_active
                    ->label('Hiển thị'),
            ])
            ->filters([
                //
            ]);
            // ->actions([
            //     Tables\Actions\EditAction::make(),
            //     Tables\Actions\DeleteAction::make(),
            // ])
            // ->bulkActions([
            //     Tables\Actions\DeleteBulkAction::make(),
            // ]);
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}