@extends('layouts.main')

@section('content') 
    <!-- Home Section -->
    <div class="container mx-auto mt-32 text-center px-6">
        <h1 class="text-4xl font-bold">Pelajari perawatan motor dengan mudah di MECHANIEXPERT</h1>
        <div class="mt-12 flex flex-col items-center">
            <img src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Gambar Perawatan Motor" class="w-64 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mt-6">Apa itu MECHANIEXPERT?</h2>
            <p class="text-lg mt-4 max-w-2xl">MECHANIEXPERT merupakan aplikasi website yang didirikan dengan tujuan membantu para pengguna motor untuk merawat motor mereka dengan benar.</p>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto mt-16 px-6">
        <h2 class="text-3xl font-bold text-center">Fitur Kami</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Panduan Perawatan Motor yang Lengkap</h3>
                <p class="mt-2 text-gray-300">Pelajari langkah-langkah perawatan motor dari dasar hingga tingkat lanjut untuk memastikan kendaraan tetap dalam kondisi prima.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Video Tutorial dari Ahli Otomotif</h3>
                <p class="mt-2 text-gray-300">Tonton video berkualitas tinggi yang dibuat oleh mekanik profesional untuk memahami cara merawat motor secara praktis.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Artikel Terbaru tentang Teknologi Otomotif</h3>
                <p class="mt-2 text-gray-300">Dapatkan wawasan terbaru tentang perkembangan teknologi otomotif dan tips perawatan terkini.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Komunitas Pengguna Berbagi Pengalaman</h3>
                <p class="mt-2 text-gray-300">Diskusikan pengalaman Anda, bertanya kepada sesama pengguna, dan berbagi tips serta trik seputar perawatan motor.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container mx-auto text-center mt-16 px-6">
        <h2 class="text-3xl font-bold">Mulai Belajar Sekarang!</h2>
        @if (!Auth::check())
            <button onclick="location.href='{{ url('/register') }}'" class="mt-6 px-6 py-3 bg-blue-500 text-white text-lg rounded-md hover:bg-blue-600">Daftar Gratis</button>
        @else
            <button onclick="location.href='{{ url('/videos') }}'" class="mt-6 px-6 py-3 bg-blue-500 text-white text-lg rounded-md hover:bg-blue-600">Nonton Video</button>
        @endif
    </div>
@endsection