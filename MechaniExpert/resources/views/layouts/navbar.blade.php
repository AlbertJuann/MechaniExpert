<nav class="fixed top-0 w-full bg-black px-8 py-6 flex justify-between items-center shadow-md shadow-gray-800 z-50">
    <a href="{{route('home') }}" class="text-3xl font-bold text-white">MECHANIEXPERT</a>
    <ul class="flex space-x-6">
        @if (!Auth::check())
            <li><a href="{{ route('login') }}" class="text-lg font-bold text-white hover:text-blue-400">Login</a></li>
            <li><a href="{{ route('register') }}" class="text-lg font-bold text-white hover:text-blue-400">Register</a></li>
        @else
            @if(Auth::user()->role == 0)
                <li><a href="{{ route('videos') }}" class="text-lg font-bold text-white hover:text-blue-400">Video</a></li>
                <li><a href="{{ route('articles') }}" class="text-lg font-bold text-white hover:text-blue-400">Artikel</a></li>
                <a href="{{ route('logout') }}" class="font-bold text-white hover:underline">Logout</a>
            @elseif(Auth::user()->role == 1)
                <li><a href="{{ route('videos') }}" class="text-lg font-bold text-white hover:text-blue-400">Video</a></li>
                <li><a href="{{ route('articles') }}" class="text-lg font-bold text-white hover:text-blue-400">Artikel</a></li>
                <a href="{{ route('logout') }}" class="font-bold text-white hover:underline">Logout</a>
            @endif
        @endif
    </ul>
</nav>