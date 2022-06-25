<?php

namespace App\Repository;

use App\Models\Lesson;
use App\Models\LessonItem;

class LessonItemRepository
{
    public static function create(Lesson $lesson, array $data): LessonItem
    {
        return $lesson->items()->create([
            'name' => $data['name'],
            'video_url' => $data['video_url'],
            'text_material' => $data['text_material']
        ]);
    }

    public static function update(LessonItem $item, array $data): LessonItem
    {
        $item->update([
            'name' => $data['name'],
            'video_url' => $data['video_url'],
            'text_material' => $data['text_material']
        ]);

        return $item;
    }
}
