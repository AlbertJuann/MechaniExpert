@extends('layouts.main')

@section('content')

<section class="max-w-7xl mx-auto mt-24 p-6">
    <a href="{{ route('videos') }}" class="inline-block mb-6 text-white rounded-lg bg-gray-800 p-4 hover:underline">
        &larr; Back to Videos
    </a>
    <h2 class="text-3xl font-bold mb-6 text-center">Daftar Video</h2>
    <div class="flex flex-col space-y-6">
        @foreach($videos as $video)
            <a href="{{ route('video', ['id' => $video->id]) }}" class="flex items-center bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 p-4">
                <div class="ml-6 flex flex-col justify-center">
                    <h3 class="text-white text-xl font-semibold">{{ $video->title }}</h3>
                    <p class="text-gray-400 text-sm mt-1 line-clamp-3 max-w-xl">{{ $video->description }}</p>
                </div>
            </a>
        @endforeach
    </div>
</section>

@endsection
