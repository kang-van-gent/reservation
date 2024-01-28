<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;

class StaffController extends Controller
{
    public function show(string $id)
    {
        $data = staff::find($id);
        return view('staff.view', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $data = new staff;
        $data->full_name = $request->name;
        $data->salary_amt = $request->salary;
        $data->save();
        return redirect('/new-staff')->with('success', 'Data has been added.');
    }


    public function index()
    {
        $data = staff::all();
        return view('staff.index', ['data' => $data]);
    }

    public function edit(string $id)
    {
        $data = staff::find($id);
        return view('staff.edit', ['data' => $data]);
    }

    public function update(Request $request, string $id)
    {
        $data = staff::find($id);
        $data->full_name = $request->name;
        $data->salary_amt = $request->salary;
        $data->save();
        return redirect('/staff')->with('success', 'Data has been updated.');
    }



    public function destroy(string $id)
    {
        staff::where('id', $id)->delete();
        return redirect('/staff')->with('success', 'Data has been deleted.');
    }
}
