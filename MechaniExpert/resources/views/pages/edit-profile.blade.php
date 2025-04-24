@extends('layouts.main')

@section('content') 

<div class="flex flex-col items-center w-full mt-24">
    <form method="POST" action="{{ route('profile_update') }}" enctype="multipart/form-data" class="bg-gray-800 p-8 rounded-lg shadow-xl w-96 text-center">
        @csrf
        @method('POST')
        <h1 class="text-white text-2xl font-bold mb-6">Edit Profil</h1>
        <div class="mb-4 text-left">
            <label for="name" class="block mb-1 text-gray-300">Nama</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6 text-left">
            <label for="email" class="block mb-1 text-gray-300">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="w-full p-2 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="w-full bg-blue-500 py-2 rounded text-white font-bold hover:bg-blue-600 transition duration-300">Simpan Perubahan</button>
    </form>
</div>

@endsection
