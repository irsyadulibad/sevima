<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Services\LessonItemService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function index()
    {
        $lessons = UserService::lessons();
        return view('student.lesson.index', compact('lessons'));
    }

    public function show(Lesson $lesson)
    {
        if(!$lesson->users->contains(Auth::user()->id)) {
            return redirect()->route('student.dashboard')
                ->with('alert_e', 'You are not registered in that class yet');
        }

        $completes = (new LessonItemService($lesson))->completes();
        return view('student.lesson.show', compact('lesson', 'completes'));
    }

    public function start(Lesson $lesson)
    {
        UserService::startLesson($lesson);
        return redirect()->route('student.lessons.show', $lesson);
    }
}
