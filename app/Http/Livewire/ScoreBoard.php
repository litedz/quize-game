<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ScoreBoard extends Component
{
    protected $listeners = ['AddScore' => 'IncrementScore'];
    public function render()
    {
        return view('livewire.score-board');
    }
    public function IncrementScore()
    {
        if (session()->exists('score')) {
            session()->increment('score', 1);
        } else {
            session()->put('score', 0);
        }
    }
    public function ResetScore() {
        session()->forget('score');
    }
}
