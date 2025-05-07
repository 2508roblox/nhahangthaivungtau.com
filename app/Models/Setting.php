<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];
}

