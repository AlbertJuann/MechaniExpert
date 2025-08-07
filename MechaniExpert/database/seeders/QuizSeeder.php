<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\QuizOption;

class QuizSeeder extends Seeder
{
    public function run(): void
    {
        // Example: attach to video with id=1
        $quiz1 = Quiz::create([
            'video_id' => 1,
            'question' => 'What is the capital of France?',
            'correct_answer' => 1, // Paris
        ]);
        QuizOption::insert([
            ['quiz_id' => $quiz1->id, 'option_text' => 'London', 'option_index' => 0],
            ['quiz_id' => $quiz1->id, 'option_text' => 'Paris', 'option_index' => 1],
            ['quiz_id' => $quiz1->id, 'option_text' => 'Berlin', 'option_index' => 2],
        ]);

        $quiz2 = Quiz::create([
            'video_id' => 1,
            'question' => 'Which planet is known as the Red Planet?',
            'correct_answer' => 2, // Mars
        ]);
        QuizOption::insert([
            ['quiz_id' => $quiz2->id, 'option_text' => 'Earth', 'option_index' => 0],
            ['quiz_id' => $quiz2->id, 'option_text' => 'Venus', 'option_index' => 1],
            ['quiz_id' => $quiz2->id, 'option_text' => 'Mars', 'option_index' => 2],
        ]);
    }
}
