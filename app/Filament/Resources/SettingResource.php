<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Cấu hình website';
    protected static ?string $modelLabel = 'Cấu hình';
    protected static ?string $pluralModelLabel = 'Cấu hình';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('settings')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('Thông tin chung')
                            ->schema([
                                Forms\Components\FileUpload::make('logo')
                                    ->label('Logo')
                                    ->directory('settings')
                                    ->image(),
                                Forms\Components\FileUpload::make('favicon')
                                    ->label('Favicon')
                                    ->directory('settings')
                                    ->image(),
                                Forms\Components\FileUpload::make('seo_banner')
                                    ->label('Seo Banner')
                                    ->directory('banner')
                                    ->image(),
                                Forms\Components\TextInput::make('website_name')
                                    ->label('Tên website'),
                                Forms\Components\TextInput::make('homepage_title')
                                    ->label('Tiêu đề trang chủ'),
                                Forms\Components\Textarea::make('homepage_description')
                                    ->label('Mô tả trang chủ'),
                                Forms\Components\Textarea::make('header')
                                    ->label('Header'),
                                Forms\Components\Textarea::make('footer')
                                    ->label('Footer'),
                                Forms\Components\Textarea::make('map_iframe')
                                    ->label('Map iframe'),
                            ])->columns(2),
                        Forms\Components\Tabs\Tab::make('Thông tin liên hệ')
                            ->schema([
                                Forms\Components\TextInput::make('email')
                                    ->label('Email'),
                                Forms\Components\TextInput::make('hotline')
                                    ->label('Hotline'),
                                Forms\Components\TextInput::make('fax')
                                    ->label('Fax'),
                                Forms\Components\RichEditor::make('address')
                                    ->label('Địa chỉ'),
                                Forms\Components\TextInput::make('fanpage')
                                    ->label('Fanpage'),
                            ])->columns(2),
                        Forms\Components\Tabs\Tab::make('Giới thiệu')
                            ->schema([
                                Forms\Components\RichEditor::make('gioi_thieu_page')
                                    ->label('Nội dung giới thiệu'),
                            ]),
                        Forms\Components\Tabs\Tab::make('Script')
                            ->schema([
                                Forms\Components\Textarea::make('script')
                                    ->label('Script'),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('website_name')
                    ->label('Tên website'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                Tables\Columns\TextColumn::make('hotline')
                    ->label('Hotline'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Cập nhật')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ViewAction::make()->label('Xem'),
                Tables\Actions\EditAction::make()->label('Sửa'),
            ])
            ->bulkActions([]); // Không cho phép xóa hàng loạt
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        // Luôn chỉ lấy row đầu tiên
        return parent::getEloquentQuery()->limit(1);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }

    // Ẩn nút tạo mới
    public static function canCreate(): bool
    {
        return false;
    }

    // Ẩn nút xóa
    public static function canDeleteAny(): bool
    {
        return false;
    }
}
