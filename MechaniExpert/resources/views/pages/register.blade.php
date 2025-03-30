@extends('layouts.main')

@section('content')
    
    <!-- Container Register -->
    <div class="flex flex-col items-center w-full mt-32">
        <div class="bg-gray-900 p-12 rounded-lg shadow-2xl shadow-gray-800/60 w-full max-w-md text-center">
            <h2 class="text-3xl text-white mb-6 font-bold">Register ke MECHANIEXPERT</h2>
            
            <!-- Form Register -->
            <form action="{{ route('perform_register') }}" method="post" class="w-full">
                @csrf
                <input type="text" name="username" placeholder="Username" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <input type="number" name="phone" placeholder="Phone" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <input type="password" name="password" placeholder="Password" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <button type="submit" class="w-full bg-blue-500 text-white text-lg py-3 rounded-md hover:bg-blue-600">Register</button>
            </form>
            
            <!-- Link Login -->
            <p class="mt-4 text-lg text-white">Sudah punya akun? <a href="{{ url('/login') }}" class="text-blue-400 font-bold">Login di sini</a></p>
            
            <!-- Register dengan Google -->
            <div class="mt-4">
                <a href="#" class="w-full bg-white text-black text-lg py-2 flex justify-center items-center rounded-md hover:bg-gray-200">
                    <img src="{{ asset('images/LogoGoogle.png') }}" alt="Google Logo" class="w-6 mr-2"> Daftar dengan Google
                </a>
            </div>
        </div>
    </div>
@endsection