<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaniExpert - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white flex flex-col justify-center items-center h-screen">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-black px-8 py-6 flex justify-between items-center shadow-xl shadow-gray-800/50 z-50">
        <a href="{{route('home') }}" class="text-3xl font-bold text-white">MECHANIEXPERT</a>
        <ul class="flex">
            <li><a href="{{ url('/login') }}" class="text-lg font-bold text-white hover:text-blue-400">Login</a></li>
        </ul>
    </nav>
    
    <!-- Container Register -->
    <div class="flex flex-col items-center w-full mt-32">
        <div class="bg-gray-900 p-12 rounded-lg shadow-2xl shadow-gray-800/60 w-full max-w-md text-center">
            <h2 class="text-3xl mb-6 font-bold">Register ke MECHANIEXPERT</h2>
            
            <!-- Form Register -->
            <form class="w-full">
                <input type="text" placeholder="Username" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <input type="email" placeholder="Email" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <input type="password" placeholder="Password" class="w-full p-4 mb-4 border border-gray-400 rounded-md text-black focus:ring focus:ring-blue-400" required>
                <button type="submit" class="w-full bg-blue-500 text-white text-lg py-3 rounded-md hover:bg-blue-600">Register</button>
            </form>
            
            <!-- Link Login -->
            <p class="mt-4 text-lg">Sudah punya akun? <a href="{{ url('/login') }}" class="text-blue-400 font-bold">Login di sini</a></p>
            
            <!-- Register dengan Google -->
            <div class="mt-4">
                <a href="#" class="w-full bg-white text-black text-lg py-2 flex justify-center items-center rounded-md hover:bg-gray-200">
                    <img src="{{ asset('images/LogoGoogle.png') }}" alt="Google Logo" class="w-6 mr-2"> Daftar dengan Google
                </a>
            </div>
        </div>
    </div>
</body>
</html>
