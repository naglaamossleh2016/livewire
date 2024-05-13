<?php

namespace App\Livewire;
use App\Models\Post;
use Livewire\Component;

class SearchEngine extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.search-engine',['posts'=>Post::where('name','like','%'.$this->search.'%')->get(),]);
    }
}
