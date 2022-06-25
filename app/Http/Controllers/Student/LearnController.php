<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\LessonItem;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function show(LessonItem $item)
    {
        return view('student.learn', compact('item'));
    }
}
