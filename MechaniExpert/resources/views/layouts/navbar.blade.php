<nav class="fixed top-0 w-full bg-black px-8 py-6 flex justify-between items-center shadow-md shadow-gray-800 z-50">
    <a href="{{route('home') }}" class="text-3xl font-bold text-white">MECHANIEXPERT</a>
    <ul class="flex space-x-6">
        @if(!Auth::check())
            <li><a href="{{ url('/videos') }}" class="text-lg font-bold text-white hover:text-blue-400">Video</a></li>
            <li><a href="{{ url('/articles') }}" class="text-lg font-bold text-white hover:text-blue-400">Artikel</a></li>
        @else
            <li><a href="{{ url('/login') }}" class="text-lg font-bold text-white hover:text-blue-400">Login</a></li>
            <li><a href="{{ url('/register') }}" class="text-lg font-bold text-white hover:text-blue-400">Register</a></li>
        @endif
    </ul>
</nav>