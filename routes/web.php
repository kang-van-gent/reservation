<?php

use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('roomtype.index');
});

Route::get('/roomtype', function () {
    return view('roomtype.index');
});
Route::get('/create', function () {
    return view('roomtype.create');
});

Route::get('/staff', function () {
    return view('staff.index');
});
Route::get('/new-staff', function () {
    return view('staff.create');
});

// Room type controller
Route::resource(name: 'roomtype', controller: RoomtypeController::class);
Route::get('/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);

//Staff controller
Route::resource(name: 'staff', controller: StaffController::class);
Route::get('/staff/{id}/delete', [StaffController::class, 'destroy']);
