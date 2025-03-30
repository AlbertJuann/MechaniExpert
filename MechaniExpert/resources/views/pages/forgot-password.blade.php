@extends('layouts.main')

@section('content') 


        <!-- Lupa Password Container -->
    <div class="flex flex-col items-center w-full mt-24">
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg max-w-md w-full text-center">
            <h2 class="text-2xl font-bold mb-4 text-white">Lupa Password?</h2>
            <p class="text-gray-300 mb-4">Masukkan email Anda untuk menerima tautan reset password.</p>
            <input type="email" placeholder="Email" required 
                class="w-full p-3 mb-4 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button class="w-full bg-blue-500 py-2 rounded text-white font-bold hover:bg-blue-600 transition duration-300">Kirim Tautan Reset</button>
            <p class="mt-4"><a href="{{ url('/login') }}" class="text-blue-400 font-bold hover:underline">Kembali ke Login</a></p>
        </div>
    </div>

 @endsection