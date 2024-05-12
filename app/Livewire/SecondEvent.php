<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class SecondEvent extends Component
{
    
     #[On('fireEvent')]
    public function doEvent(){
        dd('i am lestning now do you hear me Second Event');
    }
    public function render()
    {
        return view('livewire.second-event');
    }
}
