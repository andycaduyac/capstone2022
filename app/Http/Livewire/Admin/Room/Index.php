<?php

namespace App\Http\Livewire\Admin\Room;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $room_id;

    public function deleteRoom($room_id)
    {
        $this->room_id = $room_id;
    }

    public function destroyRoom()
    {
        $room = Room::find($this->room_id);
        $room->delete();
        session()->flash('message', 'Room Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $rooms = Room::all();
        return view('livewire.admin.room.index', compact('rooms'));
    }
}
