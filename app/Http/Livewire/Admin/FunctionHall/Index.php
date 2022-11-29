<?php

namespace App\Http\Livewire\Admin\FunctionHall;

use App\Models\FunctionHall;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $functionhall_id;

    public function deleteHall($functionhall_id)
    {
        $this->functionhall_id = $functionhall_id;
    }

    public function destroyHall()
    {
        $function_hall = FunctionHall::find($this->functionhall_id);
        $function_hall->delete();
        session()->flash('message', 'Venue Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $function_hall = FunctionHall::all();
        return view('livewire.admin.function-hall.index', compact('function_hall'));
    }
}
