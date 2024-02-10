<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
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

//Landing page
Route::get('/', function () {
    return view('layout');
});

// Room type routes.
Route::get('/roomtype', function () {
    return view('roomtype.index');
});
Route::get('/create', function () {
    return view('roomtype.create');
});

//Staff routes.
Route::get('/staff', function () {
    return view('staff.index');
});
Route::get('/staff/create', function () {
    return view('staff.create');
});

//Room routes.
Route::get('/room', function () {
    return view('room.index');
});
Route::get('/new-room', function () {
    return view('room.create');
});

//Department routes.
Route::get('/department', function () {
    return view('department.index');
});
Route::get('/new-department', function () {
    return view('department.create');
});

//Front layout route
Route::get('/frontlayout', function () {
    return view('frontlayout');
});

//Home route
Route::get('/home', [HomeController::class, 'home']);

//Customer route
Route::get('/register', [CustomerController::class, 'register']);
Route::resource('admin/customer', CustomerController::class);
Route::get('/login', [CustomerController::class, 'login']);
Route::post('customer/login', [CustomerController::class, 'customer_login']);
Route::get('/logout', [CustomerController::class, 'logout']);
Route::get('/cust/booking', [BookingController::class, 'front_booking']);
Route::get('/cust/custbooking', [BookingController::class, 'customer_booking']);

//Authentication controller
Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'check_login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

// Room type controller
Route::resource(name: 'roomtype', controller: RoomtypeController::class);
Route::get('/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);

//Staff controller
Route::resource(name: 'staff', controller: StaffController::class);
Route::get('/staff/{id}/delete', [StaffController::class, 'destroy']);

//Room controller
Route::resource(name: 'room', controller: RoomController::class);
Route::get('/room/{id}/delete', [RoomController::class, 'destroy']);

//Department controller
Route::resource(name: 'department', controller: DepartmentController::class);
Route::get('/department/{id}/delete', [DepartmentController::class, 'destroy']);

//Admin Booking
Route::get('/booking/available-rooms/{checkin_date}', [BookingController::class, 'available_rooms']);
Route::resource('/booking', BookingController::class);
