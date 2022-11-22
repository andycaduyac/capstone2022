<?php

namespace App\Http\Livewire\Admin\Reservation;

use App\Models\Reservation;
use Livewire\Component;

class Create extends Component
{

    public $name, $type, $reservation_date, $note;

    public function render()
    {
        return view('livewire.admin.reservation.create');
    }
}
