<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'name',
        'slug',
        'thumb_img',
        'img',
        'price',
        'discount_price',
        'description',
        'order_number',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($food) {
            $food->slug = Str::slug($food->name);
        });

        static::updating(function ($food) {
            $food->slug = Str::slug($food->name);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
