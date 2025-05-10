<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';
    protected static ?string $navigationLabel = 'Menu (Thực đơn)';
    protected static ?string $modelLabel = 'Menu (Thực đơn)';
    protected static ?string $pluralModelLabel = 'Menu (Thực đơn)';
    protected static ?string $navigationGroup = 'Quản lý món ăn';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin thực đơn')
                    ->description('Nhập thông tin chi tiết cho thực đơn')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Tên thực đơn')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                        if ($operation === 'create') {
                                            $set('slug', \Illuminate\Support\Str::slug($state));
                                        }
                                    }),
                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('order_number')
                                    ->label('Thứ tự')
                                    ->numeric()
                                    ->default(0)
                                    ->required(),
                                Forms\Components\Toggle::make('status')
                                    ->label('Trạng thái')
                                    ->default(true)
                                    ->required(),
                                Forms\Components\Toggle::make('is_bestseller')
                                    ->label('Bán chạy')
                                    ->default(false)
                                    ->required(),
                            ]),
                        Forms\Components\FileUpload::make('link_image')
                            ->label('Ảnh thực đơn')
                            ->directory('statics/issue')
                            ->image()
                            ->imageEditor()
                            ->multiple()
                            ->disk('public')
                            ->imagePreviewHeight('120')
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên thực đơn')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('link_image')
                    ->label('Ảnh')
                    ->limit(3)
                    ->url(fn ($record) => asset('storage/' . $record->link_image[0]))
                    ->square()
                    ->height(100)
                    ->width(100),
                Tables\Columns\TextColumn::make('order_number')
                    ->label('Thứ tự')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('status')
                    ->label('Trạng thái')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_bestseller')
                    ->label('Bán chạy')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Trạng thái')
                    ->options([
                        true => 'Hiển thị',
                        false => 'Ẩn',
                    ]),
                Tables\Filters\SelectFilter::make('is_bestseller')
                    ->label('Bán chạy')
                    ->options([
                        true => 'Có',
                        false => 'Không',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Sửa'),
                Tables\Actions\DeleteAction::make()->label('Xóa'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Xóa đã chọn'),
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
