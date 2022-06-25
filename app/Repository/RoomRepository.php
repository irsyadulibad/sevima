<?php

namespace App\Repository;

use App\Models\Room;

class RoomRepository
{
    public static function create(array $data): Room
    {
        return Room::create([
            'name' => $data['name']
        ]);
    }

    public static function update(Room $room, array $data): Room
    {
        $room->update([
            'name' => $data['name']
        ]);

        return $room;
    }
}
