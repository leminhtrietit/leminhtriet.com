<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResourceResource\Pages;
use App\Filament\Resources\ResourceResource\RelationManagers;
use App\Models\Resource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource as FilamentResource; // &#272;&#7893;i t�n alias &#273;&#7875; tr�nh tr�ng luse App\Filament\Resources\ResourceResource\Pages;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ResourceResource extends FilamentResource
{
    protected static ?string $model = Resource::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-tray';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Th�ng tin ch�nh')
                    ->schema([
                        Forms\Components\TextInput::make('appname')
                            ->label('T�n &#7913;ng d&#7909;ng')
                            ->required()
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('version')
                            ->label('Phi�n b&#7843;n')
                            ->maxLength(255),

                        Forms\Components\Select::make('category')
                            ->label('Danh m&#7909;c')
                            ->options([
                                'Ph&#7847;n m&#7873;m &#272;&#7891; h&#7885;a' => 'Ph&#7847;n m&#7873;m &#272;&#7891; h&#7885;a',
                                'V&#7869; k&#7929; thu&#7853;t' => 'V&#7869; k&#7929; thu&#7853;t',
                                'C�ng c&#7909; & Ti&#7879;n �ch' => 'C�ng c&#7909; & Ti&#7879;n �ch',
                                'H&#432;&#7899;ng d&#7851;n & Kh�c' => 'H&#432;&#7899;ng d&#7851;n & Kh�c',
                            ])
                            ->required(),

                        Forms\Components\Textarea::make('description')
                            ->label('M� t&#7843; ng&#7855;n')
                            ->columnSpanFull(),
                            
                        // S&#7917;a t&#7915; FileUpload sang TextInput
                        Forms\Components\TextInput::make('logo_url') // Thay &#273;&#7893;i &#7903; &#273;�y
                            ->label('Logo &#7913;ng d&#7909;ng (URL)') // Thay &#273;&#7893;i nh�n &#273;&#7875; ph&#7843;n �nh vi&#7879;c l&#432;u URL
                            ->url() // Th�m quy t&#7855;c validation URL (t�y ch&#7885;n)
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])->columns(3),

                Forms\Components\Section::make('H�nh &#273;&#7897;ng')
                    ->schema([
                        Forms\Components\TextInput::make('link_truycap')
                            ->label('Link t&#7843;i v&#7873; / Truy c&#7853;p')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('ten_hanhdong')
                            ->label('T�n h�nh &#273;&#7897;ng (tr�n n�t)')
                            ->default('Download')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\Select::make('trangthai_link')
                            ->label('Tr&#7841;ng th�i')
                            ->options([
                                'Ho&#7841;t &#273;&#7897;ng' => 'Ho&#7841;t &#273;&#7897;ng',
                                'B&#7843;o tr�' => 'B&#7843;o tr�',
                            ])
                            ->default('Ho&#7841;t &#273;&#7897;ng')
                            ->required(),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo_url')
                    ->label('Logo')
                    ->circular(), // B&#7887; disk('public') v� gi&#7901; l� URL tr&#7921;c ti&#7871;p
                    // Filament ImageColumn c� th&#7875; hi&#7875;n th&#7883; URL tr&#7921;c ti&#7871;p m� kh�ng c&#7847;n disk

                Tables\Columns\TextColumn::make('appname')
                    ->label('T�n &#7913;ng d&#7909;ng')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category')
                    ->label('Danh m&#7909;c')
                    ->badge()
                    ->searchable()
                    ->sortable(),
                    
                Tables\Columns\TextColumn::make('version')
                    ->label('Phi�n b&#7843;n')
                    ->searchable(),

                Tables\Columns\TextColumn::make('trangthai_link')
                    ->label('Tr&#7841;ng th�i')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Ho&#7841;t &#273;&#7897;ng' => 'success',
                        'B&#7843;o tr�' => 'warning',
                        default => 'gray',
                    }),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ng�y t&#7841;o')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('L&#7885;c theo danh m&#7909;c')
                    ->options([
                        'Ph&#7847;n m&#7873;m &#272;&#7891; h&#7885;a' => 'Ph&#7847;n m&#7873;m &#272;&#7891; h&#7885;a',
                        'V&#7869; k&#7929; thu&#7853;t' => 'V&#7869; k&#7929; thu&#7853;t',
                        'C�ng c&#7909; & Ti&#7879;n �ch' => 'C�ng c&#7909; & Ti&#7879;n �ch',
                        'H&#432;&#7899;ng d&#7851;n & Kh�c' => 'H&#432;&#7899;ng d&#7851;n & Kh�c',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListResources::route('/'),
            'create' => Pages\CreateResource::route('/create'),
            'edit' => Pages\EditResource::route('/{record}/edit'),
        ];
    }    
}