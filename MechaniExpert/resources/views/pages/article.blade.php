@extends('layouts.main')

@section('content') 

<!-- Konten Artikel -->
<div class="max-w-3xl mx-auto mt-20 p-6 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-white text-3xl font-bold mb-4 text-center">{!! $article->title !!}</h1>
        <img src="{{ asset($article->thumbnail) }}" alt="Gambar Artikel" class="w-full rounded-lg mb-6">
        <div class="text-white text-lg leading-relaxed mb-4">{!! $article->excerpt !!}</div>
        <div class="text-white text-lg leading-relaxed mb-4">{!! $article->body !!}</div>
        <p class="text-gray-400 text-sm mb-4">Published on: {{ $article->published_at }}</p>
        <a href="{{ route('articles') }}" class="block mt-6 py-3 px-6 bg-blue-500 text-white text-center rounded-lg text-lg hover:bg-blue-700">Kembali ke Artikel</a>
    </div>
@endsection
