<?php

namespace App\Http\Controllers;

use App\Models\department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show(string $id)
    {
        $data = department::find($id);
        return view('department.view', ['data' => $data]);
    }
    public function store(Request $request)
    {
        $data = new department;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->save();
        return redirect('/new-department')->with(['success' => 'Data has been added.']);
    }

    public function index()
    {
        $data = department::all();
        return view('department.index', ['data' => $data]);
    }


    public function edit(string $id)
    {
        $data = department::find($id);
        return view('department.edit', ['data' => $data]);
    }

    public function update(Request $request, string $id)
    {
        $data = department::find($id);
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->save();
        return redirect("/department/$id/edit")->with(['success' => 'Data has been updated.']);
    }

    public function destroy(string $id)
    {
        department::where('id', $id)->delete();
        return redirect('/department')->with('success', 'Data has been deleted.');
    }
}
