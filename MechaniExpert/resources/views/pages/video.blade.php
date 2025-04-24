@extends('layouts.main')

@section('content')

<section class="max-w-7xl mx-auto mt-24 p-6">
    <a href="{{ route('video_list', ['id' => $video->module_id]) }}" class="inline-block mb-6 text-white rounded-lg bg-gray-800 p-4 hover:underline">
        &larr; Back to Video List
    </a>
    <h2 class="text-3xl font-bold mb-6">{{ $video->title }}</h2>
    <div class="aspect-w-16 aspect-h-9">
        <iframe 
            src="https://www.youtube.com/embed/{{ $video->youtube_id }}" 
            title="{{ $video->title }}" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen
            class="w-full h-96 rounded-lg"
        ></iframe>
    </div>
    <p class="mt-4 text-white">{{ $video->desc }}</p>
    <p class="mt-4 text-white">{{ $video->source }}</p>
</section>

@endsection
