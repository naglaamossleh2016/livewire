<?php

namespace App\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{
    public $email;
    public $password;
    public $remember;
    
    public function updatedEmail(){
       $this->validate([
        'email' => 'required|email',]);
    }
      protected $rules=[
        'email' => 'required|email',
        'password' => 'required|min:8', // Assuming a minimum password length of 8 characters
        'remember' => 'nullable',
    ];
    
    public function updated($password){
       $this->validateOnly($password);
    }

    public function submit(){
         $this->validate([
        'email' => 'required|email',
        'password' => 'required|min:8', // Assuming a minimum password length of 8 characters
        'remember' => 'nullable',
    ]);
        dd('from submit ');
    }
    public function render()
    {
        return view('livewire.validation-component');
    }
}
