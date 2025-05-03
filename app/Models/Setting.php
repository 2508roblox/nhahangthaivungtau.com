<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'footer',
        'script',
        'gioi_thieu_page',
        'logo',
        'seo_banner',
        'favicon',
        'website_name',
        'homepage_title',
        'homepage_description',
        'email',
        'hotline',
        'fax',
        'address',
        'map_iframe',
        'fanpage',
    ];
}
