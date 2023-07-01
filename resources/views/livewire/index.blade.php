
<div class="wrapper">
   <div class="head">
      @livewire('navbar')
   </div>
   <div class="content mx-auto w-1/2 phone:w-80 flex flex-col gap-3">
      <h1 class="text-2xl text-center"> Fast Quiz</h1>
      <p> Experience the ultimate quiz game with Livewire and Laravel! Test your knowledge, compete against friends, and
         climb the leaderboard. Engaging questions, real-time challenges, and endless fun await!</p>
      <div class="row-auto">
         <div class="grid grid-col-4 phone:grid-cols-1 desktop:grid-cols-2 x-phone:grid-cols-2 tablet:grid-cols-2">
            @foreach ($types as $tys )
            <div class="type relative bg-cover w-full h-80 " style="background-image: url('/images/animals.jpg')">
               <div  class="img-container opacity-0 hover:opacity-75 transition">
                  <div class="overlay w-full h-full bg-orange-300 absolute top-0 left-0 z-10 ">
                  </div>
                  <div class="type-name z-20 font-semibold absolute w-full text-center top-1/3">
                     <a href="{{route('question.get',['type_id'=>$tys->id])}}"
                        class="text-xxl text-white">{{$tys->type}} </a>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
   </div>
