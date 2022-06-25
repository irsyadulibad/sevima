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
            'prev' => $service->prev($item),
            'next' => $service->next($item)
        ]);
    }
}
