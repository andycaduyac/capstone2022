<?php

namespace App\Http\Livewire\Admin\Table;

use App\Models\Table;
use Livewire\Component;
use Livewire\WithPagination;
use Facade\Ignition\Tabs\Tab;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $table_id;

    public function deleteTable($table_id)
    {
        $this->table_id = $table_id;
    }

    public function destroyTable()
    {
        $table = Table::find($this->table_id);
        $table->delete();
        session()->flash('message', 'Table Deleted');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $tables = Table::all();
        // $tables->paginate(5);
        return view('livewire.admin.table.index', compact('tables'));
    }
}
