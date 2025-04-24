<nav class="fixed top-0 w-full bg-black px-8 py-6 flex justify-between items-center shadow-md shadow-gray-800 z-50">
    <a href="{{route('home') }}" class="text-3xl font-bold text-white">MECHANIEXPERT</a>

    <!-- Hamburger menu button for tablet and smaller screens -->
    <button id="hamburger-btn" class="block lg:hidden focus:outline-none" aria-label="Toggle menu">
        <div class="w-6 h-0.5 bg-white mb-1"></div>
        <div class="w-6 h-0.5 bg-white mb-1"></div>
        <div class="w-6 h-0.5 bg-white"></div>
    </button>

    <!-- Navbar menu -->
    <ul id="navbar-menu" class="hidden lg:flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-6 absolute lg:static top-full left-0 w-full lg:w-auto bg-black lg:bg-transparent px-8 lg:px-0 py-4 lg:py-0 z-40">
        @if (!Auth::check())
            <li><a href="{{ route('login') }}" class="text-lg font-bold text-white hover:text-blue-400 block lg:inline">Login</a></li>
            <li><a href="{{ route('register') }}" class="text-lg font-bold text-white hover:text-blue-400 block lg:inline">Register</a></li>
        @else
            @if(Auth::user()->role == 0)
                <li><a href="{{ route('videos') }}" class="text-lg font-bold text-white hover:text-blue-400 block lg:inline">Video</a></li>
                <li><a href="{{ route('articles') }}" class="text-lg font-bold text-white hover:text-blue-400 block lg:inline">Artikel</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-lg font-bold text-white hover:underline block lg:inline bg-transparent border-none p-0 cursor-pointer">Logout</button>
                    </form>
                </li>
            @elseif(Auth::user()->role == 1)
                <li><a href="{{ route('dashboard') }}" class="text-lg font-bold text-white hover:text-blue-400 block lg:inline">Dashboard</a></li>
                <li><a href="{{ route('videos') }}" class="text-lg font-bold text-white hover:text-blue-400 block lg:inline">Video</a></li>
                <li><a href="{{ route('articles') }}" class="text-lg font-bold text-white hover:text-blue-400 block lg:inline">Artikel</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-lg font-bold text-white hover:underline block lg:inline bg-transparent border-none p-0 cursor-pointer">Logout</button>
                    </form>
                </li>
            @endif
        @endif
    </ul>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const hamburgerBtn = document.getElementById('hamburger-btn');
        const navbarMenu = document.getElementById('navbar-menu');

        hamburgerBtn.addEventListener('click', function () {
            if (navbarMenu.classList.contains('hidden')) {
                navbarMenu.classList.remove('hidden');
            } else {
                navbarMenu.classList.add('hidden');
            }
        });
    });
</script>
