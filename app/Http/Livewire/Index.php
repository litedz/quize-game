<?php

namespace App\Http\Livewire;

use App\Models\question;
use App\Models\type;
use Livewire\Component;

class Index extends Component
{

    public $question;
    public $types;
    public $name ="mohamed";
    public $message="xxxx";

    public function mount()
    {
        $this->question = question::get();
        $this->types = type::get();
    }
    public function render()
    {
        return view('livewire.index');
    }
    public function test()  {
        $this->name = 'xxxx';
    }
}
