<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Services\UserService;

class RoomController extends Controller
{
    public function index()
    {
        return view('student.room.index');
    }

    public function join(Room $room)
    {
        UserService::joinRoom($room);
        return redirect()->back()->with('alert_s', 'Successfully joined to class');
    }

    public function leave(Room $room)
    {
        UserService::leaveRoom($room);
        return redirect()->back()->with('alert_s', 'Lefted the class');
    }
}
