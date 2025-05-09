<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

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
        'is_best_seller',
        'best_seller_banner',
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
        static::updating(function ($food) {
            if ($food->isDirty('thumb_img') && ($food->getOriginal('thumb_img') !== null)) {
                Storage::disk('public')->delete($food->getOriginal('thumb_img'));
            }
        });
        static::deleting(function ($food) {
            if ($food->thumb_img) {
                Storage::disk('public')->delete($food->thumb_img);
            }
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
