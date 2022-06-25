<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'thumbnail', 'description'
    ];

    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }

    public static function boot()
    {
        parent::boot();
        static::saving(function($model) {
            $model->slug = Str::slug($model->name);
        });
    }
}
