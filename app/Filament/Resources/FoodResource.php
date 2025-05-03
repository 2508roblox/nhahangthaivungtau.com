<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FoodResource\Pages;
use App\Filament\Resources\FoodResource\RelationManagers;
use App\Models\Food;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FoodResource extends Resource
{
    protected static ?string $model = Food::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected static ?string $navigationLabel = 'Món ăn';
    protected static ?string $modelLabel = 'Món ăn';
    protected static ?string $pluralModelLabel = 'Món ăn';
    protected static ?string $navigationGroup = 'Quản lý món ăn';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin món ăn')
                    ->description('Nhập thông tin cơ bản của món ăn')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->label('Danh mục')
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->live()
                                    ->afterStateUpdated(function (Forms\Set $set) {
                                        $set('sub_category_id', null);
                                    }),
                                Forms\Components\Select::make('sub_category_id')
                                    ->label('Danh mục con')
                                    ->relationship('subCategory', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->options(function (Forms\Get $get) {
                                        $categoryId = $get('category_id');
                                        if (!$categoryId) {
                                            return [];
                                        }
                                        return \App\Models\SubCategory::where('category_id', $categoryId)
                                            ->pluck('name', 'id');
                                    }),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Tên món ăn')
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
                                Forms\Components\TextInput::make('price')
                                    ->label('Giá')
                                    ->required()
                                    ->numeric()
                                    ->prefix('₫'),
                                Forms\Components\TextInput::make('discount_price')
                                    ->label('Giá khuyến mãi')
                                    ->numeric()
                                    ->prefix('₫'),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\FileUpload::make('thumb_img')
                                    ->label('Ảnh thumbnail')
                                    ->directory('foods/thumb')
                                    ->image()
                                    ->required(),
                                Forms\Components\FileUpload::make('img')
                                    ->label('Ảnh chính')
                                    ->directory('foods')
                                    ->image()
                                    ->required(),
                            ]),
                        Forms\Components\RichEditor::make('description')
                            ->label('Mô tả')
                            ->columnSpanFull(),
                        Forms\Components\Toggle::make('status')
                            ->label('Trạng thái')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumb_img')
                    ->label('Ảnh')
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên món ăn')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Danh mục')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subCategory.name')
                    ->label('Danh mục con')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Giá')
                    ->money('VND')
                    ->sortable(),
                Tables\Columns\TextColumn::make('discount_price')
                    ->label('Giá khuyến mãi')
                    ->money('VND')
                    ->sortable(),
                Tables\Columns\TextColumn::make('order_number')
                    ->label('Thứ tự')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('status')
                    ->label('Trạng thái')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Ngày cập nhật')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->label('Danh mục')
                    ->relationship('category', 'name'),
                Tables\Filters\SelectFilter::make('subCategory')
                    ->label('Danh mục con')
                    ->relationship('subCategory', 'name'),
                Tables\Filters\SelectFilter::make('status')
                    ->label('Trạng thái')
                    ->options([
                        true => 'Hoạt động',
                        false => 'Không hoạt động',
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
            'index' => Pages\ListFood::route('/'),
            'create' => Pages\CreateFood::route('/create'),
            'edit' => Pages\EditFood::route('/{record}/edit'),
        ];
    }
}
