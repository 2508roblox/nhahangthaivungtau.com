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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;

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
                        Forms\Components\Tabs\Tab::make('Trang chủ')
                            ->schema([
                                TextInput::make('home_title')->label('Tiêu đề trang chủ (home_title)'),
                                TextInput::make('home_keyword')->label('Từ khóa trang chủ (home_keyword)'),
                                Textarea::make('home_description')->label('Mô tả trang chủ (home_description)'),
                                FileUpload::make('home_banner')
                                    ->label('Banner trang chủ (home_banner)')
                                    ->image()
                                    ->directory('settings'),
                            ]),

                        Forms\Components\Tabs\Tab::make('Thông tin Website')
                            ->schema([
                                FileUpload::make('web_logo')->label('Logo (web_logo)')->image()->directory('settings'),
                                FileUpload::make('web_favicon')->label('Favicon (web_favicon)')->image()->directory('settings'),

                                TextInput::make('web_name')->label('Tên website (web_name)'),
                                TextInput::make('web_keyword')->label('Từ khóa SEO (web_keyword)'),
                                TextInput::make('web_address')->label('Địa chỉ (web_address)'),
                                TextInput::make('web_phone')->label('Số điện thoại (web_phone)'),
                                TextInput::make('web_email')->label('Email (web_email)'),

                                TextInput::make('web_facebook')->label('Facebook (web_facebook)'),
                                TextInput::make('web_instagram')->label('Instagram (web_instagram)'),
                                TextInput::make('web_youtube')->label('YouTube (web_youtube)'),
                                TextInput::make('web_tiktok')->label('TikTok (web_tiktok)'),
                                TextInput::make('web_zalo')->label('Zalo (web_zalo)'),

                                TextInput::make('web_map_link')->label('Google Map Link (web_map_link)'),
                                Textarea::make('web_map_iframe')->label('Google Map Iframe (web_map_iframe)'),
                            ])->columns(2),

                        Forms\Components\Tabs\Tab::make('Giới thiệu')
                            ->schema([
                                TextInput::make('about_title')->label('Tiêu đề giới thiệu (about_title)'),
                                FileUpload::make('about_image')->label('Ảnh giới thiệu (about_image)')->image()->directory('settings'),
                                RichEditor::make('about_content')->label('Nội dung giới thiệu (about_content)')->columnSpanFull(),
                            ]),

                        Forms\Components\Tabs\Tab::make('Script')
                            ->schema([
                                Textarea::make('script_header')->label('Script Header (script_header)')->rows(5)->columnSpanFull(),
                                Textarea::make('script_footer')->label('Script Footer (script_footer)')->rows(5)->columnSpanFull(),
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
