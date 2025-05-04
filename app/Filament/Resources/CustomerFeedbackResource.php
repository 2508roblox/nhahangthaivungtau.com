<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerFeedbackResource\Pages;
use App\Filament\Resources\CustomerFeedbackResource\RelationManagers;
use App\Models\CustomerFeedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerFeedbackResource extends Resource
{
    protected static ?string $model = CustomerFeedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';
    protected static ?string $navigationLabel = 'Phản hồi khách hàng';
    protected static ?string $modelLabel = 'Phản hồi';
    protected static ?string $pluralModelLabel = 'Phản hồi';
    protected static ?string $navigationGroup = 'Quản lý nội dung';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin phản hồi')
                    ->description('Nhập thông tin phản hồi của khách hàng')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Tên khách hàng')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('role')
                                    ->label('Chức danh')
                                    ->maxLength(255),
                            ]),
                        Forms\Components\FileUpload::make('image')
                            ->label('Ảnh đại diện')
                            ->image()
                            ->disk('public')
                            ->imagePreviewHeight('120')
                            ->openable()
                            ->downloadable()
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('content')
                            ->label('Nội dung phản hồi')
                            ->rows(4)
                            ->required()
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Ảnh')
                    ->circular()
                    ->height(50)
                    ->width(50),
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên khách hàng')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('role')
                    ->label('Chức danh')
                    ->sortable(),
                Tables\Columns\TextColumn::make('content')
                    ->label('Nội dung')
                    ->limit(40),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                // Thêm filter nếu cần
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
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListCustomerFeedback::route('/'),
            'create' => Pages\CreateCustomerFeedback::route('/create'),
            'edit' => Pages\EditCustomerFeedback::route('/{record}/edit'),
        ];
    }
}
