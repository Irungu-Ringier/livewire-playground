<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Index extends Component
{

    public Collection $users;

    public function mount()
    {
        $this->users= User::all();
    }

    public function delete(User $user)
    {
        $user->delete();
        $this->updated();
    }

    public function updated()
    {
        $this->users = User::all();
    }

    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.index');
    }
}
