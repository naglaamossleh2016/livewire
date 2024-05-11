<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;
    public $photo;
    public function rules()  {
        return ['photo'=>'image'];
    }
    public function submit(){
        $this->validate();
        $this->photo->store('local');
    }
    public function render()
    {
        return view('livewire.file-upload');
    }
}
