<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\GuestReservation;

class AdminController extends Controller
{
    //dashboard
    public function index(){
        $reservations = GuestReservation::all();
        $users  = User::all();
        return view('admin.dashboard.dashboard', compact('reservations', 'users'));
    }

    public function allUsers(){
        return view('admin.user.index');
    }




}
