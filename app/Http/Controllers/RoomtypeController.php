<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\roomtype;
use App\Models\roomtypeimage;
use Illuminate\Support\Facades\Storage;

class RoomtypeController extends Controller
{
    public function show(string $id)
    {
        $data = roomtype::find($id);
        return view('roomtype.view', ['data' => $data]);
    }
    public function store(Request $request)
    {

        $data = new roomtype;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->save();
        foreach ($request->file('imgs') as $img) {
            $imgPath = $img->store('public/imgs');
            $imgData = new roomtypeimage();
            $imgData->roomtype_id = $data->id;
            $imgData->img_src = $imgPath;
            $imgData->img_alt = $request->title;
            $imgData->save();
        }
        return redirect('/create')->with('success', 'Data has been added.');
    }

    public function index()
    {
        $data = roomtype::all();
        return view('roomtype.index', ['data' => $data]);
    }


    public function edit(string $id)
    {
        $data = roomtype::find($id);
        return view('roomtype.edit', ['data' => $data]);
    }

    public function update(Request $request, string $id)
    {
        $data = roomtype::find($id);
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->save();
        if ($request->hasFile('imgs')) {
            foreach ($request->file('imgs') as $img) {
                $imgPath = $img->store('public/imgs');
                $imgData = new roomtypeimage();
                $imgData->roomtype_id = $data->id;
                $imgData->img_src = $imgPath;
                $imgData->img_alt = $request->title;
                $imgData->save();
            }
        }
        return redirect("/roomtype/$id/edit")->with('success', 'Data has been updated.');
    }

    public function destroy(string $id)
    {
        roomType::where('id', $id)->delete();
        return redirect('/roomtype')->with('success', 'Data has been deleted.');
    }
    public function destroy_image($img_id)
    {
        $data = roomtypeimage::where('id', $img_id)->first();
        Storage::delete($data->img_src);
        roomtypeimage::where('id', $img_id)->delete();
        return response()->json(['bool' => true]);
    }
}
