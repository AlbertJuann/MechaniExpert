<?php
// Quiz page for a video
?>
@extends('layouts.main')

@section('content')
<section class="max-w-2xl mx-auto mt-24 p-6 bg-gray-900 rounded-lg">
    <h2 class="text-3xl font-bold mb-6 text-white">Quiz: {{ $video->title }}</h2>
    <form action="{{ route('quiz.submit', $video->id) }}" method="POST">
        @csrf
        @foreach($quizzes as $quiz)
            <div class="mb-8">
                <p class="text-white font-semibold mb-2">{{ $loop->iteration }}. {{ $quiz->question }}</p>
                @foreach($quiz->options as $option)
                    <div class="flex items-center mb-2">
                        <input type="radio" id="option-{{ $quiz->id }}-{{ $option->option_index }}" name="answers[{{ $quiz->id }}]" value="{{ $option->option_index }}" class="mr-2" required>
                        <label for="option-{{ $quiz->id }}-{{ $option->option_index }}" class="text-white font-medium">
                            {{ chr(65 + $option->option_index) }}. {{ $option->option_text }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach
        <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">Submit Quiz</button>
    </form>
</section>
@endsection
@section('scripts')
<script>
    // Show selected option value for each slider
    document.querySelectorAll('.slider').forEach(function(slider) {
        slider.addEventListener('input', function() {
            // Optionally, show the selected value
        });
    });
</script>
@endsection
