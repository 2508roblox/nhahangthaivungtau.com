<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'desc',
        'short_desc',
        'thumb_img',
        'views'
    ];
    protected static function boot()
    {
        parent::boot();

        /** @var Model $model */
        static::updating(function ($model) {
            if ($model->isDirty('thumb_img') && ($model->getOriginal('thumb_img') !== null)) {
                Storage::disk('public')->delete($model->getOriginal('thumb_img'));
            }
        });
        static::deleting(function ($model) {
            if ($model->thumb_img) {
                Storage::disk('public')->delete($model->thumb_img);
            }
        });
    }

}
