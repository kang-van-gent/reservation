<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;
use App\Models\roomtype;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = room::all();
        return view('room.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roomtypes = roomtype::all();
        return view('room.create', ['roomtypes' => $roomtypes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new room;
        $data->roomtype_id = $request->rt_id;
        $data->title = $request->title;
        $data->save();
        return redirect('/room')->with('success', 'Data has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = room::find($id);
        $roomtype = roomtype::find($data->roomtype_id);
        return view('room.view', ['roomtype' => $roomtype, 'data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = room::find($id);
        $roomtypes = roomtype::all();
        return view('room.edit', ['roomtypes' => $roomtypes, 'data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = room::find($id);
        $data->title = $request->title;
        $data->roomtype_id = $request->rt_id;
        $data->save();
        return redirect('/room')->with('success', 'Data has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        room::where('id', $id)->delete();
        return redirect('/room')->with('success', 'Data has been deleted.');
    }
}
