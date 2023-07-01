<div>
    <div>
        @livewire('navbar')
    </div>
    <div>
        @livewire('score-board')
    </div>
    <div class="questions mx-auto w-1/2 gap-3 grid">
        <div class="header w-full text-center text-2xl relative">Question 1 <button type="button"
                class="absolute right-0  border-s-2  bg-green-200 p-4 rounded-md" wire:click="nextQuestion">Next
            </button></div>
        <div class="question">
            <div class="bg-slate-200 rounded p-9 font-normal">

                @isset($question[0]['question'])
                {{$question[0]['question']}}
                @endisset
                <mark class="text-2xl text-gray-600 bg-transparent">?</mark>
            </div>
        </div>
        <div class="answers">

            @error('ErrorAnswer')
            <div class="mx-auto bg-rose-300 w-1/3 h-auto p-3 rounded fixed top-10 right-4 text-white font-semibold ">
                {{$message}}
            </div>
            @enderror
            <div class="row">
                <div class="grid grid-cols-2 gap-4" x-data="{ answers: @entangle('answers') }">

                    <template x-for="answer in answers" :key="answer.id">
                        <div x-data="{answer_id:answer.id,selectElement:false}"
                            class="rounded-lg p-8 bg-sky-200 hover:cursor-pointer focus:bg-indigo-300" :class="{
                                '!bg-green-300' : $wire.CorrectAnswer == answer_id,
                                'bg-sky-300' : $wire.CorrectAnswer == 0,
                                'bg-rose-300' : $wire.CorrectAnswer !== 0,
                                'bg-orange-200' : selectElement == true,
                                }" @click="(selectElement = true) && $wire.checkAnswer(answer_id)">
                            <div class="text text-center" x-text="answer.answer"></div>

                        </div>

                </div>
                </template>
            </div>

        </div>
    </div>
</div>