@extends('layouts.main')

@section('content')    
    <!-- Container Login -->
    <div class="flex flex-col items-center w-full mt-32">
        <div class="bg-gray-900 p-12 rounded-lg shadow-2xl shadow-gray-800/60 w-full max-w-md text-center">
            <h2 class="text-3xl text-white mb-6 font-bold">Login ke MECHANIEXPERT</h2>
            
            <!-- Form Login -->
            <form method="post" action="{{ route('perform_login') }}" class="w-full">
                @csrf
                <input type="email" name="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <input type="password" name="password" placeholder="Password" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                @if($errors->any())
                    <p class="absolute bg-white w-20 my-2 text-red-600">{{$errors->first()}}</p>
                @endif
                <button type="submit" class="w-full bg-blue-500 text-white text-lg py-3 rounded-md hover:bg-blue-600">Login</button>
            </form>
            <p class="mt-4 text-lg text-white">Belum punya akun? <a href="{{ route('register') }}" class="text-blue-400 font-bold">Daftar di sini</a></p>
            {{-- <a href="{{ route('forgot_password') }}" class="text-blue-400 font-bold mt-2 block">Lupa Password?</a> --}}
            
            <!-- Login dengan Google -->
            <div class="mt-4">
                <a href="{{ route('google.login') }}" class="w-full bg-white text-black text-lg py-2 flex justify-center items-center rounded-md hover:bg-gray-200">
                    <img src="{{ asset('images/LogoGoogle.png') }}" alt="Google Logo" class="w-6 mr-2"> Login dengan Google
                </a>
            </div>
        </div>
    </div>
    
@endsection
