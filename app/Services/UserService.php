<?php

namespace App\Services;

use App\Models\CompleteItem;
use App\Models\Lesson;
use App\Models\Room;
use App\Repository\CompleteItemRepository;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public static function lessons()
    {
        $user = Auth::user();
        $lessons = [];

        if(empty($user->rooms)) return null;

        foreach($user->rooms as $room) {
            foreach($room->lessons as $lesson) {
                $lessons[] = $lesson;
            }
        }

        return $lessons;
    }

    public static function startLesson(Lesson $lesson)
    {
        $user = Auth::user();
        if(!$user->lessons->contains($lesson->id)) $user->lessons()->attach($lesson->id);

        CompleteItemRepository::create($user, $lesson);
    }

    public static function joinRoom(Room $room): void
    {
        $user = Auth::user();
        if(!$user->rooms->contains($room->id)) $user->rooms()->attach($room->id);
    }

    public static function leaveRoom(Room $room): void
    {
        $user = Auth::user();
        $user->rooms()->detach($room->id);
    }
}
