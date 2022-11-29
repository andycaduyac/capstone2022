<?php

namespace App\Http\Livewire\Admin\Booking;

use App\Models\Booking;
use Livewire\Component;

class Index extends Component
{

    public $booking_id;

    public function deleteBooking($booking_id)
    {
        $this->booking_id = $booking_id;
    }

    public function destroyBooking()
    {
        $booking = Booking::find($this->booking_id);
        $booking->delete();
        session()->flash('message', 'Booking Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $bookings = Booking::all();
        return view('livewire.admin.booking.index', compact('bookings'));
    }
}
