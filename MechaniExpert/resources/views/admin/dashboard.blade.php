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
    <div class="w-[250px] h-screen bg-[#000000] p-5 fixed top-0 left-0 shadow-md shadow-gray-800 z-50">
        <h2 class="text-center mb-5 text-2xl font-bold">Admin Panel</h2>
        <ul class="space-y-4">
            <li><a href="{{ url('/dashboard') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Dashboard</a></li>
            <li><a href="{{ url('/video-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola Video</a></li>
            <li><a href="{{ url('/article-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola Artikel</a></li>
            <li><a href="{{ url('/user-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola User</a></li>
            <li><a href="#" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Logout</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="ml-[250px] p-6 w-[calc(100%-250px)]">
        <h1 class="text-2xl font-bold">Selamat Datang di Dashboard Admin</h1>
        <p class="mt-2 text-gray-300">Kelola artikel, video, dan user di sini.</p>

        <!-- Stats -->
        <div class="flex justify-around mt-8 space-x-4">
            <div class="bg-[#333] p-6 rounded-xl text-center shadow-md w-[200px]">
                <h2 class="text-2xl font-bold mb-2">50</h2>
                <p class="text-lg text-gray-300">Video</p>
            </div>
            <div class="bg-[#333] p-6 rounded-xl text-center shadow-md w-[200px]">
                <h2 class="text-2xl font-bold mb-2">30</h2>
                <p class="text-lg text-gray-300">Artikel</p>
            </div>
            <div class="bg-[#333] p-6 rounded-xl text-center shadow-md w-[200px]">
                <h2 class="text-2xl font-bold mb-2">200</h2>
                <p class="text-lg text-gray-300">Pengguna</p>
            </div>
        </div>

</body>
</html>