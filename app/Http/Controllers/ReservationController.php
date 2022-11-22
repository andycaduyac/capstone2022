<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use function Ramsey\Uuid\v1;

use Illuminate\Http\Request;
use App\Models\GuestReservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservation.create');
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
            'name'              => ['required', 'string', 'max:255'],
            'type'              => ['required', 'string', 'max:255'],
            'reservation_date'  => ['required', 'date'],
            'note'              => ['nullable', 'string', 'max:255'],
        ]);

        Reservation::create([
            'name'                      =>              $request->name,
            'type'                      =>              $request->type,
            'reservation_date'          =>              $request->reservation_date,
            'note'                      =>              $request->note,
        ]);


        return redirect('/admin/reservations')->with('Reservation Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestReservation $reservation)
    {
        return view('admin.reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuestReservation $reservation)
    {
        $request->validate([
            'first_name'                    =>      'required|string',
            'last_name'                     =>      'required|string',
            'reservation_date'              =>      'required|date',
            'type'                          =>      'required|string',
            'message'                       =>      'nullable|string',
        ]);

        $reservation->update([
            'first_name'                    =>      $request->first_name,
            'last_name'                     =>      $request->last_name,
            'reservation_date'              =>      $request->reservation_date,
            'type'                          =>      $request->type,
            'message'                       =>      $request->message,
        ]);


        return redirect('/admin/reservations')->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
