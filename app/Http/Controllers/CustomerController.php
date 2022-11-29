<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\GuestReservation;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function contactUs(){
        return view('layouts.includes.customer.contact-us');
    }

    public function index()
    {
        //

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookings = Booking::all();
        return view('admin.customer.index', compact('bookings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = Booking::all();
        $request->validate([
            'first_name'                         =>      'required|string',
            'last_name'                          =>      'required|string',
            'email'                              =>      'required|email',
            'phone'                              =>      'required|string',
            'booking_id'                         =>      $booking->id(),
        ]);


        Booking::create([
            'book_date'                         =>      $request->date,
            'table_id'                          =>      $request->table_id,
            'functionhall_id'                   =>      $request->functionhall_id,
            'cottage_id'                        =>      $request->cottage_id,
        ]);

        return redirect('/admin/bookings')->with('Booking added.');
    }

    // public function confirmReservation(){
    //     return redirect('customer-side.confirm-reservation');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
