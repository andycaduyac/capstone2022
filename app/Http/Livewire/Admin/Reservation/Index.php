<?php

namespace App\Http\Livewire\Admin\Reservation;

use Livewire\Component;
// use App\Models\Reservation;
use Livewire\WithPagination;
use App\Models\GuestReservation;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';


    public $reservation_id, $search, $type = 'all', $date;

    public function deleteReservation($reservation_id)
    {
        $this->reservation_id = $reservation_id;
    }

    public function destroyReservation()
    {
        $reservation = GuestReservation::find($this->reservation_id);
        $reservation->delete();
        session()->flash('message', 'Reservation Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $query = GuestReservation::orderBy('id', 'desc')->search($this->search);
        if($this->type != 'all') {
            $query->where('type', $this->type);
        }
        if($this->date != null) {
            $query->where('reservation_date', $this->date);
        }

        $reservations = $query->paginate(10);
        return view('livewire.admin.reservation.index', compact('reservations'));
    }


}
