<?php

namespace App\Http\Controllers;

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
        return view('layouts.includes.customer.home');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer-side.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'                    =>      'required|string',
            'last_name'                     =>      'required|string',
            'email'                         =>      'required|email',
            'telephone_no'                  =>      'required|string|max:11',
            'reservation_date'              =>      'required|date_format:Y-m-d',
            'type'                          =>      'required|string',
            'message'                       =>      'nullable|string',
        ]);

        $token = Str::random(5);

        $reservation = GuestReservation::create([
            'first_name'                    =>      $request->first_name,
            'last_name'                     =>      $request->last_name,
            'email'                         =>      $request->email,
            'telephone_no'                  =>      $request->telephone_no,
            'reservation_date'              =>      $request->reservation_date,
            'type'                          =>      $request->type,
            'message'                       =>      $request->message,
            'remember_token'                =>      'JYRAS-'.$token
        ]);

        Mail::send('customer-side.confirmation-mail', ['reservation' => $reservation], function($mail) use($reservation){
            $mail->to($reservation->email);
            $mail->subject('Confirm your Reservation');
        });

        return redirect('/make-reservation')->with('message','Please check your email to confirm your reservation');
    }

    public function confirmation(GuestReservation $reservation, $token){
        if($reservation->remember_token == $token){

            $reservation->verified_at = now();
            $reservation->save();
            return view('customer-side.confirmed', compact('reservation'))->with('message', 'Reservation completely made.');
        }

        return redirect('/')-with('error', 'Failed to make the reservation');
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
