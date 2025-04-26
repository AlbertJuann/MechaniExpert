@extends('layouts.main')

@section('content') 

<section class="max-w-7xl mx-auto mt-24 p-6  text-center">
    <h2 class="text-3xl font-bold mb-6">Video Edukasi</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($categories as $video)
            <a href="{{ route('video_list', ['id' => $video->id]) }}" class="bg-gray-800 p-4 rounded-lg shadow-lg block">
                <img src="https://drive.google.com/thumbnail?id={{$video->thumbnail}}" alt="Thumbnail for {{ $video->title }}" class="w-full h-40 object-cover rounded-md">
                <p class="mt-2 text-lg text-white">{{ $video->title }}</p>
            </a>
        @endforeach
    </div>
</section>

@endsection
