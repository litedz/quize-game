<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    function __construct()
    {
        
    }
    public $test = 'Mohamed';

    function setName()
    {
        $this->test = 'xxx';
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
