<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - MechaniExpert</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-[#000000] text-white font-sans">

    <!-- Sidebar -->
    <div class="w-[250px] h-screen bg-[#000000] p-5 fixed top-0 left-0 flex flex-col justify-between shadow-md shadow-gray-800 z-50">
        <div>
            <h2 class="text-center mb-5 text-2xl font-bold">Admin Panel</h2>
            <ul class="space-y-4">
                <li><a href="{{ url('/dashboard') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Dashboard</a></li>
                <li><a href="{{ url('/video-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola Video</a></li>
                <li><a href="{{ url('/article-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola Artikel</a></li>
                <li><a href="{{ url('/user-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola User</a></li>
            </ul>
        </div>
        <div class="pt-5">
            <div class="space-y-4">
                <a href="home" class="block px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-center">Home</a>
                <form method="POST" action="{{ route('logout') }}" class="bg-red-600 hover:bg-red-700 rounded text-center block px-4 py-2">
                    @csrf
                    <button type="submit" class="text-white hover:underline block lg:inline border-none p-0 cursor-pointer">Logout</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <!-- Content -->
    <div class="ml-[250px] p-6 w-[calc(100%-250px)]">
        <h1 class="text-2xl font-bold">Selamat Datang di Dashboard Admin</h1>
        <p class="mt-2 text-gray-300">Kelola artikel, video, dan user di sini.</p>

        <!-- Stats -->
        <div class="flex justify-around mt-8 space-x-4">
            <div class="bg-[#333] p-6 rounded-xl text-center shadow-md w-[200px]">
                <h2 class="text-2xl font-bold mb-2">{{ $videoCount }}</h2>
                <p class="text-lg text-gray-300">Video</p>
            </div>
            <div class="bg-[#333] p-6 rounded-xl text-center shadow-md w-[200px]">
                <h2 class="text-2xl font-bold mb-2">{{ $articleCount }}</h2>
                <p class="text-lg text-gray-300">Artikel</p>
            </div>
            <div class="bg-[#333] p-6 rounded-xl text-center shadow-md w-[200px]">
                <h2 class="text-2xl font-bold mb-2">{{ $userCount }}</h2>
                <p class="text-lg text-gray-300">Pengguna</p>
            </div>
        </div>

</body>
</html>