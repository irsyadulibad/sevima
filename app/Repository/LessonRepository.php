<?php

namespace App\Repository;

use App\Models\Lesson;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class LessonRepository
{
    public static function create(array $data): Lesson
    {
        $data['thumbnail'] = static::upThumbnail($data['thumbnail']);

        $lesson = Lesson::create([
            'name' => $data['name'],
            'thumbnail' => $data['thumbnail'],
            'description' => $data['description']
        ]);

        $lesson->rooms()->attach($data['rooms']);

        return $lesson;
    }

    public static function update(Lesson $lesson, array $data): Lesson
    {
        if($data['thumbnail'] ?? null) {
            $data['thumbnail'] = static::upThumbnail($data['thumbnail']);
        }

        $lesson->update([
            'name' => $data['name'],
            'thumbnail' => $data['thumbnail'] ?? $lesson->thumbnail,
            'description' => $data['description']
        ]);
        
        $lesson->rooms()->detach();
        $lesson->rooms()->attach($data['rooms']);

        return $lesson;
    }

    private static function upThumbnail(UploadedFile $thumbnail): string
    {
        $path = 'assets/lesson';
        $storage = Storage::disk('public');
        $name = 'thumb_' . time() . '.' . $thumbnail->getClientOriginalExtension();

        if(!$storage->exists($path)) $storage->makeDirectory($path);
        $thumbnail->storeAs("public/$path", $name);

        return $name;
    }
}
