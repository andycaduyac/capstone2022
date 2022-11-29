<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CottageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\FunctionHallController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/login', [AuthController:: class, 'loginForm'])->name('login');
Route::post('/admin/login', [AuthController:: class, 'login']);
Route::get('/admin-register', [AuthController:: class, 'registerForm']);
Route::post('/register', [AuthController:: class, 'register']);
// Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);


// Route::get('/',[CustomerController::class, 'index']);
Route::get('/', [FrontEndController::class, 'index']);
Route::get('/contact-us',[CustomerController::class, 'contactUs']);

//guest reservation
// Route::get('/make-reservation',[CustomerController::class, 'create']);
// Route::post('/make-reservation',[CustomerController::class, 'store']);
// Route::get('/confirm-reservation',[CustomerController::class, 'confirmReservation']);
// Route::get('/confirmation/{reservation}/{token}', [CustomerController::class, 'confirmation']);


//FRONT END
Route::get(('/frontend'), [FrontEndController::class, 'index']);
Route::get(('/availables'), [FrontEndController::class, 'available']);


//show types
Route::get('/all-cottages', [FrontEndController::class, 'showCottages']);
Route::get('/all-functionhall', [FrontEndController::class, 'showFunctionhall']);
Route::get('/all-rooms', [FrontEndController::class, 'showRooms']);
Route::get('/all-tables', [FrontEndController::class, 'showTables']);




Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    // Route::get(); middleware(['auth', 'isAdmin'])->
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index']);

        //reservations
        // Route::get('/reservations', [ReservationController::class, 'index']);
        // Route::get('/reservations/create', [ReservationController::class, 'create']);
        // Route::post('/reservations', [ReservationController::class, 'store']);
        // Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit']);
        // Route::get('/reservations/delete', [ReservationController::class, 'destroy']);
        // Route::put('reservations/{reservation}', [ReservationController::class, 'update']);

        // Route::get('/guest-reservations', [CustomerController::class, 'listReservations']);

        //users
        Route::get('/users', [AdminController::class, 'allUsers']);


        //TABLES
        Route::get('/tables', [TableController::class, 'index']);
        Route::get('/tables/create', [TableController::class, 'create']);
        Route::post('/tables', [TableController::class, 'store']);
        Route::get('/tables/{table}/edit', [TableController::class, 'edit']);
        Route::put('/tables/{table}', [TableController::class, 'update']);
        Route::get('/tables/delete', [TableController::class, 'destroy']);

        //FUNCTION HALL
        Route::get('/function-hall', [FunctionHallController::class, 'index']);
        Route::get('/function-hall/create', [FunctionHallController::class, 'create']);
        Route::post('/function-hall', [FunctionHallController::class, 'store']);
        Route::get('/function-hall/{function_hall}/edit', [FunctionHallController::class, 'edit']);
        Route::put('/function-hall/{function_hall}', [FunctionHallController::class, 'update']);
        Route::get('/function-hall/delete', [FunctionHallController::class, 'destroy']);

        //COTTAGE
        Route::get('/cottages', [CottageController::class, 'index']);
        Route::get('/cottages/create', [CottageController::class, 'create']);
        Route::post('/cottages', [CottageController::class, 'store']);
        Route::get('/cottages/{cottage}/edit', [CottageController::class, 'edit']);
        Route::put('/cottages/{cottage}', [CottageController::class, 'update']);
        Route::get('/cottages/delete', [CottageController::class, 'destroy']);

        //COTTAGE
        Route::get('/rooms', [RoomController::class, 'index']);
        Route::get('/rooms/create', [RoomController::class, 'create']);
        Route::post('/rooms', [RoomController::class, 'store']);
        Route::get('/rooms/{room}/edit', [RoomController::class, 'edit']);
        Route::put('/rooms/{room}', [RoomController::class, 'update']);
        Route::get('/rooms/delete', [RoomController::class, 'destroy']);



        //BOOKINGS
        Route::get('/bookings', [BookingController::class, 'index']);
        Route::get('/bookings/create', [BookingController::class, 'create']);
        Route::post('/bookings', [BookingController::class, 'store']);
        Route::get('/bookings/{room}/edit', [BookingController::class, 'edit']);
        Route::put('/bookings/{room}', [BookingController::class, 'update']);
        Route::get('/bookings/delete', [BookingController::class, 'destroy']);
    });
});



