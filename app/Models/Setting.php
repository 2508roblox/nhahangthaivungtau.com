<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_title',
        'home_keyword',
        'home_description',
        'home_banner',
        'web_logo',
        'web_favicon',
        'web_name',
        'web_keyword',
        'web_address',
        'web_phone',
        'web_email',
        'web_instagram',
        'web_facebook',
        'web_youtube',
        'web_tiktok',
        'web_zalo',
        'web_map_link',
        'web_map_iframe',

        'script_footer',
        'script_header',
        'about_title',
        'about_content',
        'about_image',
        'album_1',
        'album_2',
        'album_3',
        'album_4',
        'album_5',
        'best_sellers',
        'banner_seller',
        'link_seller',
    ];
    protected $casts = [
        'best_sellers' => 'array',
    ];
    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('web_logo') && ($model->getOriginal('web_logo') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('web_logo'));
            }
            if ($model->isDirty('web_favicon') && ($model->getOriginal('web_favicon') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('web_favicon'));
            }
            if ($model->isDirty('album_1') && ($model->getOriginal('album_1') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('album_1'));
            }
            if ($model->isDirty('album_2') && ($model->getOriginal('album_2') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('album_2'));
            }
            if ($model->isDirty('album_3') && ($model->getOriginal('album_3') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('album_3'));
            }
            if ($model->isDirty('album_4') && ($model->getOriginal('album_4') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('album_4'));
            }
            if ($model->isDirty('album_5') && ($model->getOriginal('album_5') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('album_5'));
            }
            if ($model->isDirty('banner_seller') && ($model->getOriginal('banner_seller') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('banner_seller'));
            }
        });

    }
}

