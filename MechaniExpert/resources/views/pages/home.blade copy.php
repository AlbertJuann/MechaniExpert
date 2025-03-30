<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MechaniExpert - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white">
    <!-- Navbar -->
    <nav class="fixed top-0 w-full bg-black px-8 py-6 flex justify-between items-center shadow-md shadow-gray-800 z-50">
        <a href="{{route('home') }}" class="text-3xl font-bold text-white">MECHANIEXPERT</a>
        <ul class="flex space-x-6">
            <li><a href="{{ url('/videos') }}" class="text-lg font-bold hover:text-blue-400">Video</a></li>
            <li><a href="{{ url('/article-home-page') }}" class="text-lg font-bold hover:text-blue-400">Artikel</a></li>
            <li><a href="{{ url('/login') }}" class="text-lg font-bold hover:text-blue-400">Login</a></li>
            <li><a href="{{ url('/register') }}" class="text-lg font-bold hover:text-blue-400">Register</a></li>
        </ul>
    </nav>

    <!-- Home Section -->
    <div class="container mx-auto mt-32 text-center px-6">
        <h1 class="text-4xl font-bold">Pelajari perawatan motor dengan mudah di MECHANIEXPERT</h1>
        <div class="mt-12 flex flex-col items-center">
            <img src="{{ asset('images/LogoMechaniExpert.png') }}" alt="Gambar Perawatan Motor" class="w-64 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mt-6">Apa itu MECHANIEXPERT?</h2>
            <p class="text-lg mt-4 max-w-2xl">MECHANIEXPERT merupakan aplikasi website yang didirikan dengan tujuan membantu para pengguna motor untuk merawat motor mereka dengan benar.</p>
        </div>
    </div>

    <!-- Features Section -->
    <div class="container mx-auto mt-16 px-6">
        <h2 class="text-3xl font-bold text-center">Fitur Kami</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Panduan Perawatan Motor yang Lengkap</h3>
                <p class="mt-2 text-gray-300">Pelajari langkah-langkah perawatan motor dari dasar hingga tingkat lanjut untuk memastikan kendaraan tetap dalam kondisi prima.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Video Tutorial dari Ahli Otomotif</h3>
                <p class="mt-2 text-gray-300">Tonton video berkualitas tinggi yang dibuat oleh mekanik profesional untuk memahami cara merawat motor secara praktis.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Artikel Terbaru tentang Teknologi Otomotif</h3>
                <p class="mt-2 text-gray-300">Dapatkan wawasan terbaru tentang perkembangan teknologi otomotif dan tips perawatan terkini.</p>
            </div>
            <div class="p-6 bg-gray-800 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Komunitas Pengguna Berbagi Pengalaman</h3>
                <p class="mt-2 text-gray-300">Diskusikan pengalaman Anda, bertanya kepada sesama pengguna, dan berbagi tips serta trik seputar perawatan motor.</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="container mx-auto text-center mt-16 px-6">
        <h2 class="text-3xl font-bold">Mulai Belajar Sekarang!</h2>
        <button onclick="location.href='{{ url('/register') }}'" class="mt-6 px-6 py-3 bg-blue-500 text-white text-lg rounded-md hover:bg-blue-600">Daftar Gratis</button>
    </div>

    <!-- Footer -->
    <footer class="bg-black mt-16 py-12 text-center shadow-md shadow-gray-800">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div>
                <h1 class="text-3xl font-bold">MECHANIEXPERT</h1>
                <p class="mt-2">Jl. MH. Thamrin, RT.002/RW.001, Panunggangan, Kec. Pinang, Kota Tangerang, Banten 15143</p>
            </div>
            <div>
                <h1 class="text-3xl font-bold">CONTACT US</h1>
                <p class="mt-2">MechaniExpert@Gmail.com</p>
                <p>+62-812-7570-2455 (WA Only)</p>
            </div>
            <div>
                <h1 class="text-3xl font-bold">SOCIAL MEDIA</h1>
                <div class="flex justify-center mt-2 space-x-4">
                    <a href="https://www.instagram.com/albert_juan7/"><img src="{{ asset('images/LogoIG.jpg') }}" class="w-10"></a>
                    <a href="https://www.facebook.com/albert.juan.144734/?locale=id_ID"><img src="{{ asset('images/LogoTiktok.png') }}" class="w-10"></a>
                    <a href="https://x.com/Albertjuan2003"><img src="{{ asset('images/LogoX.jpg') }}" class="w-10"></a>
                    <a href="https://www.youtube.com/@albertjuan1167"><img src="{{ asset('images/LogoYoutube1.jpg') }}" class="w-10"></a>
                </div>
            </div>
        </div>
        <p class="mt-8 text-gray-500">Copyright © 2025 All rights reserved</p>
    </footer>
</body>
</html>
