@extends('layouts.main')

@section('content') 

<section class="max-w-7xl mx-auto mt-24 p-6  text-center">
        <h2 class="text-3xl font-bold mb-6">Video Edukasi</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Video 1 -->
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <iframe class="w-full h-48 rounded-lg" src="https://www.youtube.com/embed/example1" frameborder="0" allowfullscreen></iframe>
                <p class="mt-2 text-lg">Judul Video 1</p>
            </div>
            <!-- Video 2 -->
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <iframe class="w-full h-48 rounded-lg" src="https://www.youtube.com/embed/example2" frameborder="0" allowfullscreen></iframe>
                <p class="mt-2 text-lg">Judul Video 2</p>
            </div>
            <!-- Video 3 -->
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <iframe class="w-full h-48 rounded-lg" src="https://www.youtube.com/embed/example3" frameborder="0" allowfullscreen></iframe>
                <p class="mt-2 text-lg">Judul Video 3</p>
            </div>
            <!-- Video 4 -->
            <div class="bg-gray-800 p-4 rounded-lg shadow-lg">
                <iframe class="w-full h-48 rounded-lg" src="https://www.youtube.com/embed/example4" frameborder="0" allowfullscreen></iframe>
                <p class="mt-2 text-lg">Judul Video 4</p>
            </div>
        </div>
    </section>

@endsection