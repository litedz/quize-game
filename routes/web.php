<?php

use App\Http\Controllers\QuestionController;
use App\Http\Livewire\Index;
use App\Http\Livewire\Question;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Index::class);
Route::get('/type/{type_id}/question', Question::class)->name('question.get');
