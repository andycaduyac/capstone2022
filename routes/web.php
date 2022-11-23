<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ReservationController;
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
// Route::get('/admin-register', [AuthController:: class, 'registerForm']);
// Route::post('/register', [AuthController:: class, 'register']);
// Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);


Route::get('/',[CustomerController::class, 'index']);
Route::get('/contact-us',[CustomerController::class, 'contactUs']);

//guest reservation
Route::get('/make-reservation',[CustomerController::class, 'create']);
Route::post('/make-reservation',[CustomerController::class, 'store']);
// Route::get('/confirm-reservation',[CustomerController::class, 'confirmReservation']);
Route::get('/confirmation/{reservation}/{token}', [CustomerController::class, 'confirmation']);


Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    // Route::get();
    Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index']);

        //reservations
        Route::get('/reservations', [ReservationController::class, 'index']);
        Route::get('/reservations/create', [ReservationController::class, 'create']);
        Route::post('/reservations', [ReservationController::class, 'store']);
        Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit']);
        Route::get('/reservations/delete', [ReservationController::class, 'destroy']);
        Route::put('reservations/{reservation}', [ReservationController::class, 'update']);

        Route::get('/guest-reservations', [CustomerController::class, 'listReservations']);

        //users
        Route::get('/users', [AdminController::class, 'allUsers']);
    });
});



