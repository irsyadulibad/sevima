<?php

namespace App\Services;

use App\Models\Lesson;
use App\Models\LessonItem;

class LessonItemService
{
    protected Lesson $lesson;
    protected array $items;

    public function __construct(Lesson $lesson)
    {
        $this->lesson = $lesson;
        $this->items = $this->lesson->items()->latest()->pluck('id')->toArray();
    }

    public function prev(LessonItem $item): LessonItem|null
    {
        $pos = array_search($item->id, $this->items);
        
        if(!array_key_exists($pos + 1, $this->items)) return null;
        return LessonItem::find($this->items[$pos + 1]);
    }

    public function next(LessonItem $item): LessonItem|null
    {
        $pos = array_search($item->id, $this->items);

        if(($pos - 1) < 0) return null;
        return LessonItem::find($this->items[$pos - 1]);
    }
}
