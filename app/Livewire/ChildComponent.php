<?php

namespace App\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{
    public $childname;
    public function render()
    {
        return view('livewire.child-component');
    }
}
