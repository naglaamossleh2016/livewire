<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $childern=['Hussien','deyaa','tamem'];
    public function render()
    {
        return view('livewire.parent-component');
    }
}
