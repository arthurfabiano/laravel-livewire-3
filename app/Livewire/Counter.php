<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $name = "Elaine Pinto de Assis";
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }

    public function change()
    {
        $this->name = "Arthur Fabiano";
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
