<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class SayHi extends Component
{

    public string $name;
    public string $email;

    public function mount($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.say-hi');
    }
}
