@extends('layouts.main')

@section('content')  
    <div class="mt-32 flex flex-wrap justify-center gap-6 p-6 w-4/8">
        <div class="bg-gray-800 p-10 rounded-lg shadow-xl max-w-md flex-1 text-center">
            <h2 id="user-name" class="text-3xl font-bold text-white">{{ $user->name }}</h2>
            <p id="user-email" class="text-gray-300 text-lg">{{ $user->email }}</p>
            <a href="{{ route('edit_profile') }}" class="bg-blue-500 text-white text-lg px-6 py-3 rounded-md mt-4 inline-block hover:bg-blue-600 transition-transform transform hover:scale-110 w-full">Edit Profil</a>
            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button type="submit" class="bg-red-500 text-white text-lg px-6 py-3 rounded-md hover:bg-red-600 transition-transform transform hover:scale-110 w-full">Logout</button>
            </form>
        </div>
    </div>
@endsection
