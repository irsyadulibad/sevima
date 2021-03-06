<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function($model) {
            $model->slug = Str::slug($model->name);
        });
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }
}
