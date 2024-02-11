<?php

namespace App\Http\Controllers;

use App\Models\roomtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    function home()
    {
        $roomtypes = roomtype::all();
        return view('front.home', ['roomtypes' => $roomtypes]);
    }

    function gallery()
    {
        $roomtypes = roomtype::all();
        return view('front.gallery', ['roomtypes' => $roomtypes]);
    }
}
