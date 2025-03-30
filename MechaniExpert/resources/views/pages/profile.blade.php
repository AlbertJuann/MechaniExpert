@extends('layouts.main')

@section('content')  

<script>
        let userName = "User";
        let userEmail = "user@example.com";
        let userPhoto = "https://via.placeholder.com/120";
        let articlesRead = 10;
        let videosWatched = 5;
        
        window.onload = function() {
            document.getElementById("user-name").innerText = userName;
            document.getElementById("user-email").innerText = userEmail;
            document.getElementById("user-photo").src = userPhoto;
            document.getElementById("articles-read").innerText = articlesRead;
            document.getElementById("videos-watched").innerText = videosWatched;
        };
    </script>

    <div class="mt-32 flex flex-wrap justify-center gap-6 p-6 w-4/8">
        <div class="bg-gray-900 p-10 rounded-lg shadow-xl max-w-md flex-1 text-center">
            <img id="user-photo" src="{{ asset('images/LogoMechaniExpert.png') }}" alt="" class="w-32 h-32 rounded-full mx-auto border-4 border-blue-400 mb-6">
            <h2 id="user-name" class="text-3xl font-bold text-white"></h2>
            <p id="user-email" class="text-gray-300 text-lg"></p>
            <button class="bg-blue-500 text-white text-lg px-6 py-3 rounded-md mt-4 hover:bg-blue-600 transition-transform transform hover:scale-110">Edit Profil</button>
            <button class="bg-red-500 text-white text-lg px-6 py-3 rounded-md mt-2 hover:bg-red-600 transition-transform transform hover:scale-110">Logout</button>
        </div>
        <div class="bg-gray-900 p-10 rounded-lg shadow-xl flex-1 text-left">
            <h3 class="text-blue-400 text-2xl font-semibold">Informasi Tambahan</h3>
            <p class="text-gray-300 mt-4 text-lg"><strong>Artikel yang Dibaca:</strong> <span id="articles-read"></span></p>
            <p class="text-gray-300 mt-4 text-lg"><strong>Video yang Ditonton:</strong> <span id="videos-watched"></span></p>
        </div>
    </div>
    @endsection