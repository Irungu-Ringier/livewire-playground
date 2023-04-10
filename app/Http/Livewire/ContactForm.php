<?php

namespace App\Http\Livewire;

use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public $successMessage;

    protected $rules = [
        'name' => 'required|min:8',
        'email' => 'required|email',
        'phone' => 'required|integer',
        'message' => 'required'
    ];

    /**
     * @throws ValidationException
     */
    public function submitForm()
    {
        // Logic to save message to database

        sleep(2);

        $this->resetForm();

        $this->successMessage = 'Successfully submitted!';
    }

    /**
     * @param $propertyName
     * @throws ValidationException
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * @return void
     */
    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }

    /**
     * @return View
     */
    public function render()
    {
        return view('livewire.contact-form');
    }
}
