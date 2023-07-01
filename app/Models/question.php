<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class question extends Model
{
    use HasFactory;
    protected $fillable = ['question'];
    protected $with = ['CorrectAnswer'];


    function CorrectAnswer(): BelongsTo
    {

        return $this->belongsTo(answer::class,'answer_id','id')->select('id','answer');
    }
}
