<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //register
    function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $data = new customer();
        $data->fullname = $request->fullname;
        $data->email = $request->email;
        $data->password = sha1($request->password);
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->save();
        return redirect('register')->with('success', 'Data has been added.');
    }

    //Login
    function login()
    {
        return view('frontlogin');
    }

    //Check Login
    function customer_login(Request $request)
    {
        $email = $request->email;
        $pwd = sha1($request->password);
        $detail = Customer::where(['email' => $email, 'password' => $pwd])->count();
        if ($detail > 0) {
            $detail = Customer::where(['email' => $email, 'password' => $pwd])->get();
            session(['customerlogin' => true, 'data' => $detail]);
            return redirect('/home');
        } else {
            return redirect('login')->with('error', 'Invalid email/password!!');
        }
    }

    //Logout
    function logout()
    {
        session()->forget(['customerlogin', 'data']);
        return redirect('login');
    }
}
