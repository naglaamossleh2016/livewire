<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class FirstEvent extends Component
{
    public function runEvent(){
        // $this->dispatch('fireEvent')->to(ThirdEvent::class);
        $this->dispatch('fireEvent');
    }
    //  #[On('fireEvent')]
    // public function doEvent(){
    //     dd('i am lestning now do you hear me self Event');
    // }
    public function render()
    {
        return view('livewire.first-event');
    }
}
