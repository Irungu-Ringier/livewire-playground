<?php

namespace App\Http\Livewire;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public $successMessage;

    /**
     * @throws ValidationException
     */
    public function submitForm()
    {
//        $this->validate(request(), [
//            'name' => 'required',
//            'email' => 'required|email',
//            'message' => 'required'
//        ]);

//        User::create([
//            'name' => $this->name,
//            'email' => $this->email,
//            'password' => bcrypt($this->message)
//        ]);

        $this->resetForm();

        $this->successMessage = 'Successfully submitted!';
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
