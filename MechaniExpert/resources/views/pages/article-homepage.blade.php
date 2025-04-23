@extends('layouts.main')

@section('content')

<!-- Konten Utama -->
<div class="max-w-7xl mx-auto mt-24 p-6 text-center">
        <h1 class="text-white text-4xl font-bold mb-8">Artikel Seputar Perawatan Motor</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8 px-6">
            <!-- Artikel 1 -->
            <div class="bg-gray-800 p-5 rounded-xl shadow-lg">
                <img src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Artikel 1" class="w-full rounded-lg">
                <h3 class="text-white mt-4 text-2xl font-semibold">Cara Merawat Mesin Motor Agar Awet</h3>
                <p class="mt-2 text-gray-400">Pelajari cara merawat mesin motor agar tetap awet dan optimal.</p>
                <a href="/article" class="mt-4 inline-block text-blue-400 font-bold text-lg hover:text-blue-500">Baca Selengkapnya</a>
            </div>
            <!-- Artikel 2 -->
            <div class="bg-gray-800 p-5 rounded-xl shadow-lg">
                <img src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Artikel 2" class="w-full rounded-lg">
                <h3 class="text-white mt-4 text-2xl font-semibold">Tips Mengganti Oli Secara Mandiri</h3>
                <p class="mt-2 text-gray-400">Bagaimana cara mengganti oli motor dengan benar di rumah?</p>
                <a href="/article" class="mt-4 inline-block text-blue-400 font-bold text-lg hover:text-blue-500">Baca Selengkapnya</a>
            </div>
            <!-- Artikel 3 -->
            <div class="bg-gray-800 p-5 rounded-xl shadow-lg">
                <img src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Artikel 3" class="w-full rounded-lg">
                <h3 class="text-white mt-4 text-2xl font-semibold">Kenali Tanda-tanda Aki Motor Lemah</h3>
                <p class="mt-2 text-gray-400">Gejala aki motor yang mulai melemah dan cara mengatasinya.</p>
                <a href="/article" class="mt-4 inline-block text-blue-400 font-bold text-lg hover:text-blue-500">Baca Selengkapnya</a>
            </div>
            <!-- Artikel 4 -->
            <div class="bg-gray-800 p-5 rounded-xl shadow-lg">
                <img src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Artikel 4" class="w-full rounded-lg">
                <h3 class="text-white mt-4 text-2xl font-semibold">Perawatan Ban Motor untuk Keamanan Berkendara</h3>
                <p class="mt-2 text-gray-400">Pentingnya perawatan ban motor dan cara menjaga performanya.</p>
                <a href="/article" class="mt-4 inline-block text-blue-400 font-bold text-lg hover:text-blue-500">Baca Selengkapnya</a>
            </div>
        </div>
    </div>

@endsection