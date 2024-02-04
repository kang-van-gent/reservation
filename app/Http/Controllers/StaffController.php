<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\department;

class StaffController extends Controller
{
    public function show(string $id)
    {
        $data = staff::find($id);
        $departments = department::find($data->id);
        return view('staff.view', ['departments' => $departments, 'data' => $data]);
    }

    public function store(Request $request)
    {
        $data = new staff;
        $data->full_name = $request->name;
        $data->department_id = $request->dp_id;
        $data->salary_amt = $request->salary;
        $data->save();
        return redirect('/new-staff')->with('success', 'Data has been added.');
    }

    public function create()
    {
        $departments = department::all();
        return view('staff.create', ['departments' => $departments]);
    }

    public function index()
    {
        $data = staff::all();
        return view('staff.index', ['data' => $data]);
    }

    public function edit(string $id)
    {
        $data = staff::find($id);
        $departments = department::all();
        return view('staff.edit', ['departments' => $departments, 'data' => $data]);
    }

    public function update(Request $request, string $id)
    {
        $data = staff::find($id);
        $data->full_name = $request->name;
        $data->department_id = $request->dp_id;
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
