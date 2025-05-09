<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_link',
        'title',
        'description',
        'order_number',
        'status',
        'is_featured',
        'image',
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_featured' => 'boolean',
    ];
    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('image') && ($model->getOriginal('image') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('image'));
            }
        });
        static::deleting(function ($model) {
            if ($model->image) {
                    Storage::disk('public')->delete($model->image);
            }
        });
    }
}
