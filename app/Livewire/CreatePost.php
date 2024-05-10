<?php

namespace App\Livewire;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreatePost extends Component
{
   public $counter=0;
   public function increament($value){
    dd($value);
    $this->counter++;
   }
   public function decreament(){
    $this->counter--;
   }
//    public $title;
//  public function mount(){
//     $this->fullName='hoda';
//     $this->title='defaul page';
//     $this->fill(['fullName'=>'naglaa']);
//     $this->reset('title');
//    }
// data binding
    // public $fullName=['Naglaa','Abou Bakr','Mossleh'];
    // // computed function
    // public function getUserNameProperty(){
    //   return implode(' ',$this->fullName);
    // }
    public function render()
    {
        return view('livewire.create-post');
    }
}
