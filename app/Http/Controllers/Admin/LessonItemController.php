<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LessonItemRequest;
use App\Models\Lesson;
use App\Models\LessonItem;
use App\Repository\LessonItemRepository;
use Illuminate\Http\Request;

class LessonItemController extends Controller
{
    public function create(Lesson $lesson)
    {
        return view('admin.item.create', compact('lesson'));
    }

    public function edit(Lesson $lesson, LessonItem $item)
    {
        return view('admin.item.edit', compact('lesson', 'item'));
    }

    public function store(LessonItemRequest $request, Lesson $lesson)
    {
        LessonItemRepository::create($lesson, $request->all());
        return redirect()->back()->with('alert_s', 'Material added successfully');
    }

    public function update(LessonItemRequest $request, Lesson $lesson, LessonItem $item)
    {
        LessonItemRepository::update($item, $request->all());
        return redirect()->back()->with('alert_s', 'Material updated successfully');
    }

    public function destroy(Lesson $lesson, LessonItem $item)
    {
        $item->delete();
        return redirect()->back()->with('alert_s', 'Material deleted successfully');
    }
}
