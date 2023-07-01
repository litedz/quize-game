<div>
    <div class="w-full ">
        <div class="border-spacing-1 border-2 mt-1 mb-1 mx-0 p-3 text-right">
            <span class="name">Score : </span>
            <span class="score">
                @if (session()->get('score'))
              {{  session()->get('score')}}
                @else
                0
                @endif
                <span class="fa fa-star text-yellow-300 text-2xl"></span></span>

                <span class="fa fa-arrow-left-rotate border-2 p-1 border-gray-400 cursor-pointer rounded-full" wire:click="ResetScore"></span>
        </div>
    </div>
</div>