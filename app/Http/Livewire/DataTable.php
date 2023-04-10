<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination;

    public $search = '';

    protected $users;

    public $active = false;

    public function updatedActive()
    {
        if ($this->active)
        {
            $this->users = User::where('active', $this->active)->paginate(10);
        }
        else
        {
            $this->users = User::paginate(10);
        }
    }

    public function updatedSearch()
    {
        $this->users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(10);
    }

    public function mount()
    {
        $this->users = User::paginate(10);
    }


    public function render()
    {
        $this->updatedSearch();

        $this->updatedActive();

        return view('livewire.data-table', [
            'users' => $this->users,
        ]);
    }
}
