<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactLeads;

class ContactForm extends Component
{
    public string $name;
    public string $email;
    public string $phone;
    public string $message;
    public int $preferred = 0;
    protected array $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|min:4',
        'message' => 'required',
    ];
    public function save(){
       $validatedData = $this->validate();
        ContactLeads::create($validatedData);
       return   redirect('thankyoupage');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
