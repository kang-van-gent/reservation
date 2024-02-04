<?php

namespace App\Http\Controllers;

use App\Models\roomtype;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home()
    {
        $roomtypes = roomtype::all();
        return view('home', ['roomtypes' => $roomtypes]);
    }
}
