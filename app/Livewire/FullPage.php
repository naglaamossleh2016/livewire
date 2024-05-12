<?php

namespace App\Livewire;

use Livewire\Component;

class FullPage extends Component
{
    public function render()
    {
        // return view('livewire.full-page')->layout('layouts.default')->slot('content');
        return view('livewire.full-page')->extends('layouts.default')->yield('content');
    }
}
