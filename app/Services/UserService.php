<?php

namespace App\Services;

use App\Models\Room;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserService
{
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
