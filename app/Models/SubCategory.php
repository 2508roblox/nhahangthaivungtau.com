<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'order_number',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($subCategory) {
            $subCategory->slug = Str::slug($subCategory->name);
        });

        static::updating(function ($subCategory) {
            $subCategory->slug = Str::slug($subCategory->name);
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
