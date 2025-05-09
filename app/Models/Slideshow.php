<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
class Slideshow extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_link',
        'status',
        'order_number',
    ];
    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('image_link') && ($model->getOriginal('image_link') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('image_link'));
            }
        });
        static::deleting(function ($model) {
            if ($model->image_link) {
                Storage::disk('public')->delete($model->image_link);
            }
        });
    }
}
