<?php

namespace App\Http\Controllers;

use App\Models\roomtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    //Check Available Rooms
    function available_rooms(Request $request, $checkin_date)
    {
        $arooms = DB::SELECT("SELECT * FROM room WHERE id NOT IN (SELECT room_id FROM booking WHERE '$checkin_date'>= checkin_date AND '$checkin_date'<checkout_date)");

        $data = [];
        foreach ($arooms as $room) {
            $roomtypes = roomtype::find($room->roomtype_id);
            $data[] = ['room' => $room, 'roomtype' => $roomtypes];
        }
        return response()->json(['data' => $data]);
    }
}
