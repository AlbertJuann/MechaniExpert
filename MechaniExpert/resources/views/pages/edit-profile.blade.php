@extends('layouts.main')

@section('content') 

<div class="flex flex-col items-center w-full mt-24">
<div class="bg-gray-800 p-8 rounded-lg shadow-xl w-96 text-center">
        <h1 class="text-white text-2xl font-bold mb-6">Edit Profil</h1>
        <div class="flex flex-col items-center mb-6">
            <img id="profileImage" src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Foto Profil" class="w-24 h-24 rounded-full object-cover border-4 border-blue-400 mb-4">
            <input type="file" id="profilePicInput" accept="image/*" class="text-sm text-gray-300 cursor-pointer">
        </div>
        <div class="mb-4 text-left">
            <label for="name" class="block mb-1 text-gray-300">Nama</label>
            <input type="text" id="name" value="Asep Budi" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6 text-left">
            <label for="email" class="block mb-1 text-gray-300">Email</label>
            <input type="email" id="email" value="asepbudi@email.com" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button class="w-full bg-blue-500 py-2 rounded text-white font-bold hover:bg-blue-600 transition duration-300">Simpan Perubahan</button>
    </div>
    <script>
        document.getElementById('profilePicInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profileImage').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</div>
    
@endsection