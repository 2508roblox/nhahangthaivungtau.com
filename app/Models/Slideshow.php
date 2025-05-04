<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slideshow extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_link',
        'status',
        'order_number',
    ];
}
