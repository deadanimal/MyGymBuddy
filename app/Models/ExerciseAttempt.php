<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseAttempt extends Model
{
    use HasFactory;

    protected $fillable = [
        'exercise_id',
        'weight',
        'repetition',
    ];     

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }           
}
