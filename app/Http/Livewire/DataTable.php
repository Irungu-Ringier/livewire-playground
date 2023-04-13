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



    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.data-table', [
            'users' => User::query()
                ->where(function ($query) {
                    if ($this->active) {
                        $query->where('active', $this->active);
                    }
                })
                ->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                })
            ->paginate(10)
        ]);
    }
}
