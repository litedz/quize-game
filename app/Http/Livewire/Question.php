<?php

namespace App\Http\Livewire;

use App\Models\answer;
use App\Models\question as ModelsQuestion;
use Livewire\Component;

class Question extends Component
{
    public $question;
    public ?int $CorrectAnswer = 0;
    public ?string $SelectAnswer = '';
    public $answers = [];
    public $fakeAnswer;
    public $type_id;
    public $name;



    function mount($type_id)
    {
        $this->type_id = $type_id;
        $this->getQuestions();
    }


    public function hydrate()
    {
        // sleep(1);
        // $this->getQuestions();
    }
    public function checkAnswer($AnswerUser_id)
    {
        $this->CorrectAnswer = $this->question[0]["correct_answer"]['id'];
        if ($this->CorrectAnswer == $AnswerUser_id) {
            $this->emit('AddScore');
        }
    }

    public function getQuestions()
    {
        $this->question = collect(ModelsQuestion::where('type_id', $this->type_id)->get())->random(1)->toArray();
        $this->getanswers();
    }
    public function getanswers()
    {

        $this->answers = collect(answer::where('type_id', $this->type_id)->select('answer', 'id')->get())
            ->where('id', '<>', $this->question[0]["correct_answer"]['id'])
            ->random(3);
        // push the correct answer with fake answers
        $this->answers->push($this->question[0]["correct_answer"]);

        $this->answers = $this->answers->sortBy('answer', 5)->values();
    }
    public function nextQuestion()
    {
        $this->reset('CorrectAnswer');
        $this->getQuestions();
    }
    public function render()
    {
        return view('livewire.question');
    }
}
