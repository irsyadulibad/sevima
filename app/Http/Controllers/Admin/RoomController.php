<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoomRequest;
use App\Models\Room;
use App\Repository\RoomRepository;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        return view('admin.room.index');
    }

    public function create()
    {
        return view('admin.room.create');
    }

    public function edit(Room $room)
    {
        return view('admin.room.edit', compact('room'));
    }

    public function store(RoomRequest $request)
    {
        RoomRepository::create($request->only('name'));
        return redirect()->back()->with('alert_s', 'Room added successfully');
    } 

    public function update(RoomRequest $request, Room $room)
    {
        RoomRepository::update($room, $request->only('name'));
        return redirect()->back()->with('alert_s', 'Room updated successfully');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->back()->with('alert_s', 'Room deleted successfully');
    }
}
