@extends('layouts.main')

@section('content')
<section class="max-w-2xl mx-auto mt-24 p-6 bg-gray-900 rounded-lg text-center">
    <h2 class="text-3xl font-bold mb-6 text-white">Quiz Result</h2>
    <p class="text-white text-lg mb-4">Your Score: <span class="font-bold">{{ $score }} / {{ $total }}</span></p>
    <a href="{{ route('video', $videoId) }}" class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Back to Video</a>
</section>
@endsection
