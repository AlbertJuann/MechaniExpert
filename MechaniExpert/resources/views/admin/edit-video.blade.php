<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Video - MechaniExpert</title>
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
    <div class="mt-10">
        <a href="#" class="block px-4 py-2 bg-red-600 hover:bg-red-700 text-center rounded">Logout</a>
    </div>
</div>

    <!-- Content -->
    <main class="ml-64 w-full p-8 mt-6">
        <div class="bg-[#222] p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Edit Video</h1>
            <label for="title" class="block mt-4 mb-1 font-semibold">Judul Video</label>
            <input type="text" id="title" value="Judul Video Contoh" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

            <label for="category" class="block mt-6 mb-1 font-semibold">Kategori</label>
            <select id="category" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="Perawatan Mesin">Perawatan Mesin</option>
                <option value="Tips Berkendara">Tips Berkendara</option>
                <option value="Modifikasi">Modifikasi</option>
            </select>

            <label for="description" class="block mt-6 mb-1 font-semibold">Deskripsi Video</label>
            <textarea id="description" rows="6" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">Deskripsi video contoh...</textarea>

            <label for="video" class="block mt-6 mb-1 font-semibold">Unggah Video Baru</label>
            <input type="file" id="video" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

            <button class="mt-6 bg-cyan-500 hover:bg-cyan-600 text-white px-5 py-2 rounded">Simpan Perubahan</button>
        </div>
    </main>
</body>
</html>
