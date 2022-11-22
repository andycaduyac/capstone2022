<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('livewire.admin.user.index', compact('users'));
    }
}
