<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AlbumResource\Pages;
use App\Filament\Resources\AlbumResource\RelationManagers;
use App\Models\Album;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AlbumResource extends Resource
{
    protected static ?string $model = Album::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Album ảnh';
    protected static ?string $modelLabel = 'Album';
    protected static ?string $pluralModelLabel = 'Album';
    protected static ?string $navigationGroup = 'Quản lý nội dung';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin album')
                    ->description('Nhập thông tin cơ bản của album')
                    ->schema([
                        Forms\Components\Grid::make(1)
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Tiêu đề')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('order_number')
                                    ->label('Thứ tự')
                                    ->numeric()
                                    ->default(0)
                                    ->required(),
                                Forms\Components\FileUpload::make('image_link')
                                    ->label('Ảnh')
                                    ->image()
                                    ->disk('public')
                                    ->columnSpanFull()
                                    ->required()
                                 ,
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Tiêu đề')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image_link')
                    ->label('Ảnh')
                    ->height(100)
                    ->width(100)
                    ->square(),
                Tables\Columns\TextColumn::make('order_number')
                    ->label('Thứ tự')
                    ->sortable(),
         
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->reorderable('order_number')
            ->defaultSort('order_number');
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
            'index' => Pages\ListAlbums::route('/'),
            'edit' => Pages\EditAlbum::route('/{record}/edit'),
        ];
    }
}
