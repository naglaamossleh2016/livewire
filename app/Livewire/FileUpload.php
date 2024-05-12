<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;
    public $photos=[];
    public function rules()  {
        return ['photos.*'=>'image'];
    }
    public function submit(){
        $this->validate();
        foreach($this->photos as $photo){

            $photo->store('local');
        }
    }
    
    public function render()
    {
        return view('livewire.file-upload');
    }
}
