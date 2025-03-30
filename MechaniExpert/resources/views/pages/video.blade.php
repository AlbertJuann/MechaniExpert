@extends('layouts.main')

@section('content') 

<!-- Konten Utama -->
<div class="flex flex-col items-center justify-center text-center mt-32 p-6">
        <div class="w-full max-w-4xl">
            <video controls class="w-full rounded-lg shadow-lg">
                <source src="/Video/sample-video.mp4" type="video/mp4">
            </video>
            <h2 class="text-white text-3xl font-bold mt-6">Judul Video</h2>
            <p class="text-gray-400 text-lg mt-4">Deskripsi lengkap mengenai video ini.</p>
        </div>
    </div>

@endsection