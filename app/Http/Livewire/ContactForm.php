<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public string $successMessage;

    public function render()
    {
        return view('livewire.contact-form');
    }
}
