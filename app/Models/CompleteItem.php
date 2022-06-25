<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompleteItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'lesson_id', 'user_id', 'completes'
    ];

    protected $casts = [
        'completes' => 'array'
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
