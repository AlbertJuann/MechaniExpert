<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizOption;
use App\Models\Video;

class QuizAdminController extends Controller
{
    public function index()
    {
        $videos = Video::with(['quizzes.options'])->get();
        return view('admin.quiz-control', compact('videos'));
    }

    public function show($videoId)
    {
        $video = Video::with(['quizzes.options'])->findOrFail($videoId);
        return view('admin.quiz-list', compact('video'));
    }

    public function create($videoId)
    {
        $video = Video::findOrFail($videoId);
        return view('admin.quiz-create', compact('video'));
    }

    public function store(Request $request, $videoId)
    {
        $request->validate([
            'question' => 'required',
            'options' => 'required|array|min:2',
            'correct_answer' => 'required|integer',
        ]);
        $quiz = Quiz::create([
            'video_id' => $videoId,
            'question' => $request->question,
            'correct_answer' => $request->correct_answer,
        ]);
        foreach ($request->options as $idx => $option) {
            QuizOption::create([
                'quiz_id' => $quiz->id,
                'option_text' => $option,
                'option_index' => $idx,
            ]);
        }
        return redirect()->route('admin.quiz.show', $videoId)->with('success', 'Quiz created!');
    }

    public function edit($quizId)
    {
        $quiz = Quiz::with('options')->findOrFail($quizId);
        return view('admin.quiz-edit', compact('quiz'));
    }

    public function update(Request $request, $quizId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $request->validate([
            'question' => 'required',
            'options' => 'required|array|min:2',
            'correct_answer' => 'required|integer',
        ]);
        $quiz->update([
            'question' => $request->question,
            'correct_answer' => $request->correct_answer,
        ]);
        $quiz->options()->delete();
        foreach ($request->options as $idx => $option) {
            QuizOption::create([
                'quiz_id' => $quiz->id,
                'option_text' => $option,
                'option_index' => $idx,
            ]);
        }
        return redirect()->route('admin.quiz.show', $quiz->video_id)->with('success', 'Quiz updated!');
    }

    public function destroy($quizId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $videoId = $quiz->video_id;
        $quiz->options()->delete();
        $quiz->delete();
        return redirect()->route('admin.quiz.show', $videoId)->with('success', 'Quiz deleted!');
    }
}
