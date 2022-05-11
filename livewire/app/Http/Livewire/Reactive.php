<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Reactive extends Component
{
    public $count;
    public $text;

    public function mount(){
        $this->count=0;
        $this->text='';
    }

    public function count(){
        #manda a aunmentar 1 a count
        $this->count++;
    }


    public function render()
    {
        return view('livewire.reactive');
    }
}
