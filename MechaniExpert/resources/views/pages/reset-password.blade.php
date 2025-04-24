@extends('layouts.main')

@section('content')

<div class="flex flex-col items-center w-full mt-24">
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg max-w-md w-full text-center">
        <h2 class="text-2xl font-bold mb-4 text-white">Reset Password</h2>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                class="w-full p-3 mb-4 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('email')
                <div class="mb-4 text-red-500 font-semibold">{{ $message }}</div>
            @enderror
            <input type="password" name="password" placeholder="New Password" required
                class="w-full p-3 mb-4 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('password')
                <div class="mb-4 text-red-500 font-semibold">{{ $message }}</div>
            @enderror
            <input type="password" name="password_confirmation" placeholder="Confirm New Password" required
                class="w-full p-3 mb-4 rounded bg-gray-700 text-white border border-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="w-full bg-blue-500 py-2 rounded text-white font-bold hover:bg-blue-600 transition duration-300">Reset Password</button>
        </form>
    </div>
</div>

@endsection
