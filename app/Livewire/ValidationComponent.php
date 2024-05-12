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
    //   protected $rules=[
    //     'email' => 'required|email',
    //     'password' => 'required|min:8', // Assuming a minimum password length of 8 characters
    //     'remember' => 'nullable',
    // ];
    
    // public function updated($password){
    //    $this->validateOnly($password);
    // }
     public function rules()
    {
        return [
        'email' => 'required|email',
        'password' => 'required|min:8', // Assuming a minimum password length of 8 characters
        'remember' => 'nullable',
    ];
    }
    public function messages(){
        return [
            'email.required'=>'هذا الحقل مطلوب',
            'password.required'=>'كلمة المرور مطلوبة',
            'password.min'=>' كلمة المرور لابد أن تكون على الاقل 8 أحرف '
        ];

    }
    public function attributes(){
        return [
        'email'=>'البريد الإلكتروني',
        'password'=>'كلمة المرور'
        ];
    }
    

    public function submit(){
         $this->validate($this->rules(),$this->messages(),$this->attributes());
        $this->addError('custom-error','This is custom error');
    }
    public function render()
    {
        return view('livewire.validation-component');
    }
}
