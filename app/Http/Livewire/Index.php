<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Component;

class Index extends Component
{

    public string $name = 'My people';

    public bool $status = false;

    public array $greeting = ["Sema"];

    public function resetName($name = 'New Name')
    {
        $this->name = $name;
    }

    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.index');
    }
}
