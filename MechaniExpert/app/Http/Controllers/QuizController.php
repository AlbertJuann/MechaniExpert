<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Quiz;
use App\Models\QuizOption;

class QuizController extends Controller
{
    public function show($videoId)
    {
        $video = Video::findOrFail($videoId);
        $quizzes = Quiz::with('options')->where('video_id', $videoId)->get();
        return view('pages.quiz', [
            'video' => $video,
            'quizzes' => $quizzes,
            'title' => 'Quiz: ' . $video->title,
        ]);
    }

    public function submit(Request $request, $videoId)
    {
        $quizzes = Quiz::with('options')->where('video_id', $videoId)->get();
        $score = 0;
        $total = $quizzes->count();
        $answers = $request->input('answers', []);
        foreach ($quizzes as $quiz) {
            if (isset($answers[$quiz->id]) && intval($answers[$quiz->id]) === $quiz->correct_answer) {
                $score++;
            }
        }
        return view('pages.quiz_result', [
            'score' => $score,
            'total' => $total,
            'quizzes' => $quizzes,
            'videoId' => $videoId,
            'title' => 'Quiz Result',
        ]);
    }
}
