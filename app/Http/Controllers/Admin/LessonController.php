<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LessonRequest;
use App\Models\Lesson;
use App\Repository\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('admin.lesson.index');
    }

    public function create()
    {
        return view('admin.lesson.create');
    }

    public function edit(Lesson $lesson)
    {
        return view('admin.lesson.edit', compact('lesson'));
    }

    public function store(LessonRequest $request)
    {
        LessonRepository::create($request->only('name', 'thumbnail', 'description'));
        return redirect()->back()->with('alert_s', 'Lesson added successfully');
    }

    public function update(LessonRequest $request, Lesson $lesson)
    {
        LessonRepository::update($lesson, $request->only('name', 'thumbnail', 'description'));
        return redirect()->back()->with('alert_s', 'Lesson updated successfully');
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->back()->with('alert_s', 'Lesson deleted successfully');
    }

    public function dt()
    {
        return datatables(Lesson::query())
            ->addIndexColumn()
            ->addColumn('detailUrl', fn($les) => route('admin.lessons.show', $les))
            ->addColumn('rooms', fn($les) => $les->rooms)
            ->editColumn('description', fn($les) => substr($les->description, 0, 15))
            ->toJson();
    }
}
