<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count=0;
    public function Increment()
    {
       $this->count++;
    }
    public function Decrement()
    {
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
