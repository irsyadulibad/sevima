<?php

namespace App\Services;

use App\Models\Lesson;
use App\Models\Room;
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
        $lessons = $user->lessons()->pluck('lesson_id')->toArray();

        if(!in_array($lesson->id, $lessons)) $user->lessons()->attach($lesson->id);
    }

    public static function joinRoom(Room $room): void
    {
        $user = Auth::user();
        $joinedRooms = $user->rooms()->pluck('room_id')->toArray();

        if(!in_array($room->id, $joinedRooms)) $user->rooms()->attach($room->id);
    }

    public static function leaveRoom(Room $room): void
    {
        $user = Auth::user();
        $user->rooms()->detach($room->id);
    }
}
