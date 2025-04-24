@extends('layouts.main')

@section('content')

<!-- Konten Utama -->
<div class="max-w-7xl mx-auto mt-24 p-6 text-center">
        <h1 class="text-white text-4xl font-bold mb-8">Artikel Seputar Perawatan Motor</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
            @foreach($articles as $article)
            <div class="bg-gray-800 p-5 rounded-xl shadow-lg">
                <img src="{{ asset('images/LogoMechaniExpert.png') }}" class="w-full rounded-lg">
                <h3 class="text-white mt-4 text-2xl font-semibold">{{ $article->title }}</h3>
                <p class="mt-2 text-gray-400"> {{ $article->excerpt }}</p>
                <a href="{{ route('article', ['slug' => $article->slug]) }}" class="mt-4 inline-block text-blue-400 font-bold text-lg hover:text-blue-500">Baca Selengkapnya</a>
            </div>
            @endforeach
        </div>

        <div class="mt-8">
            {{ $articles->links() }}
        </div>
    </div>

@endsection
