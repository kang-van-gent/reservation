<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\customer;
use App\Models\roomtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{

    public function index()
    {
        $data = booking::all();
        return view('booking.index', ['data' => $data]);
    }

    public function create()
    {
        $customers = customer::all();
        return view('booking.create', ['data' => $customers]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'room_id' => 'required',
            'roomprice' => 'required',
            'total_adults' => 'required',
        ]);



        $data = new booking();
        $customers = customer::all();
        $data->customer_id = $request->customer_id;
        $data->room_id = $request->room_id;
        $data->checkin_date = $request->checkin_date;
        $data->checkout_date = $request->checkout_date;
        $data->total_adults = $request->total_adults;
        $data->total_children = $request->total_children;
        $data->ref = "Admin";
        $data->price = $request->roomprice;
        $data->save();
        return view('booking.create', ['success' => 'Data has been added.', 'data' => $customers]);
    }

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

    public function front_booking()
    {
        $data = booking::all();
        return view('front.index', ['data' => $data]);
    }

    public function customer_booking()
    {
        $customers = customer::all();
        return view('front.create', ['data' => $customers]);
    }

    public function customer_store_booking(Request $request)
    {
        $request->validate([
            'checkin_date' => 'required',
            'checkout_date' => 'required',
            'room_id' => 'required',
            'total_adults' => 'required',
        ]);
        $data = new booking();
        $customers = customer::all();
        $collection = session('data');
        $cus = $collection->first();
        $cus_id = $cus->id;
        $data->customer_id = $cus_id;
        $data->room_id = $request->room_id;
        $data->checkin_date = $request->checkin_date;
        $data->checkout_date = $request->checkout_date;
        $data->total_adults = $request->total_adults;
        $data->total_children = $request->total_children;
        $data->price = $request->roomprice;
        $data->ref = "Customer";
        $data->save();
        return view('front.create', ['success' => 'Data has been added.', 'data' => $customers]);
    }

    public function destroy(string $id)
    {
        booking::where('id', $id)->delete();
        return redirect('/booking')->with('success', 'Data has been deleted.');
    }
    public function cust_destroy(string $id)
    {
        booking::where('id', $id)->delete();
        return redirect('/cust/booking')->with('success', 'Data has been deleted.');
    }
}
