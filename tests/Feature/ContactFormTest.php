<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    public function test_contact_form_livewire_component_exists()
    {
        $this->get(route('index'))->assertSeeLivewire('contact-form');
    }

    public function test_contact_form_submit_success()
    {
        Livewire::test(ContactForm::class)
            ->set('name', fake()->name)
            ->set('email', fake()->email)
            ->set('phone',  fake()->numberBetween(1000000000, 9999999999))
            ->set('message', fake()->text)
            ->call('submitForm')
            ->assertSee('Successfully submitted!');
    }

    public function test_contact_form_name_is_required()
    {
        Livewire::test(ContactForm::class)
//            ->set('name', '')
            ->set('email', fake()->email)
            ->set('phone',  fake()->phoneNumber)
            ->set('message', fake()->text)
            ->call('submitForm')
            ->assertHasErrors(['name' => 'required']);
    }
}
