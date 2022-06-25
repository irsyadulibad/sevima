<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'lesson_id', 'name', 'video_url', 'text_material'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
