<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\LessonItem;
use App\Services\LessonItemService;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function show(LessonItem $item)
    {
        $service = new LessonItemService($item->lesson);

        return view('student.learn', [
            'item' => $item,
            'prev' => $service->prev($item)
        ]);
    }

    public function store(LessonItem $item)
    {
        $service = new LessonItemService($item->lesson);
        $next = $service->next($item);

        $service->markAsComplete($item);
        if($next) return redirect()->route('student.learn.show', $next);

        return redirect()->route('student.lessons.show', $item->lesson)
            ->with('alert_s', "You have finished this lesson");
    }
}
