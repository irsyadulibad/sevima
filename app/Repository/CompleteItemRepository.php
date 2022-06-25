<?php

namespace App\Repository;

use App\Models\CompleteItem;
use App\Models\Lesson;
use App\Models\LessonItem;
use App\Models\User;

class CompleteItemRepository
{
    public static function create(User $user, Lesson $lesson): CompleteItem
    {
        return CompleteItem::create([
            'lesson_id' => $lesson->id,
            'user_id' => $user->id,
            'completes' => []
        ]);
    }
}
