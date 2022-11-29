<?php

namespace App\Http\Livewire\Admin\Cottage;

use App\Models\Cottage;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $cottage_id;

    public function deleteCottage($cottage_id)
    {
        $this->cottage_id = $cottage_id;
    }

    public function destroyCottage()
    {
        $cottage = Cottage::find($this->cottage_id);
        $cottage->delete();
        session()->flash('message', 'Cottage Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $cottages = Cottage::all();
        return view('livewire.admin.cottage.index', compact('cottages'));
    }
}
