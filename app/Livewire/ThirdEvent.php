<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class ThirdEvent extends Component
{
    #[On('fireEvent')]
    public function doEvent(){
        dd('i am lestning now do you hear me Third event');
    }
    public function render()
    {
        return view('livewire.third-event');
    }
}
