<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'order_number',
        'status',
        'link_image',
        'is_bestseller',
    ];

    protected $casts = [
        'link_image' => 'array', // Tự động chuyển json sang mảng khi lấy ra
        'status' => 'boolean',
        'is_bestseller' => 'boolean',
    ];
}
