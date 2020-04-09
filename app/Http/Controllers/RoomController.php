<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Hotel $hotel)
    {
        return $hotel->rooms;
    }

    public function show(Hotel $hotel, Room $room)
    {
        return $hotel->rooms->find($room->id);
    }

    public function store(Request $request)
    {
        $room = Room::create($request->all());

        return response()->json($room, 201);
    }

    public function update(Request $request, Room $room)
    {
        $room->update($request->all());

        return response()->json($room, 200);
    }

    public function delete(Request $request, Room $room)
    {
        $room->delete();

        return response()->json(null, 204);
    }
}
