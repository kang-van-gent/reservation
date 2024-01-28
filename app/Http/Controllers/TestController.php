<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function view(Request $request)
    {

        $data = ['id' => $request->id, 'name' => $request->name];
        return view('test')->with($data);
    }
}
