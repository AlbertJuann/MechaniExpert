@extends('layouts.main')

@section('content') 

<!-- Konten Artikel -->
<div class="max-w-3xl mx-auto mt-20 p-6 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-white text-3xl font-bold mb-4 text-center">Judul Artikel</h1>
        <img src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Gambar Artikel" class="w-full rounded-lg mb-6">
        <p class="text-white text-lg leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel dui eget lorem varius volutpat sit amet at nisl...</p>
        <p class="text-white text-lg leading-relaxed mb-4">Curabitur imperdiet est ut sem fermentum, id volutpat elit laoreet. Duis fermentum sagittis eros nec luctus...</p>
        <a href="artikel.html" class="block mt-6 py-3 px-6 bg-blue-500 text-white text-center rounded-lg text-lg hover:bg-blue-700">Kembali ke Artikel</a>
    </div>
@endsection