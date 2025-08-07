<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $fillable = ['video_id', 'question', 'correct_answer'];

    public function options()
    {
        return $this->hasMany(QuizOption::class);
    }
}
