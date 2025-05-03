<?php

namespace App\Filament\Resources\AlbumResource\Pages;

use App\Filament\Resources\AlbumResource;
use App\Models\Album;
use Filament\Resources\Pages\Page;
use Filament\Actions;
use Filament\Support\Enums\MaxWidth;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms;

class AlbumGallery extends Page
{
    protected static string $resource = AlbumResource::class;
    protected static string $view = 'filament.resources.album-resource.pages.album-gallery';

    public function getTitle(): string
    {
        return 'Album ảnh';
    }
}
