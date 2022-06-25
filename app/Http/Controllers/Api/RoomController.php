<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

use function PHPUnit\Framework\matches;

class RoomController extends Controller
{
    public function datatables()
    {
        return datatables(Room::query())
            ->addIndexColumn()
            ->addColumn('detailUrl', fn($room) => route('admin.rooms.show', $room))
            ->toJson();
    }
}
