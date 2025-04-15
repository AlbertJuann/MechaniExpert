<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel - MechaniExpert</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#000000] text-white font-sans flex">

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

<!-- Main Content -->
<div class="ml-[250px] w-full min-h-screen p-10">
    <div class="bg-[#222] p-8 rounded-xl w-full h-full shadow-lg shadow-gray-600">
        <h1 class="text-3xl font-bold mb-8 text-center">Tambah Artikel Baru</h1>
        <form>
            <div class="mb-6">
                <label for="judul" class="block mb-2">Judul Artikel</label>
                <input type="text" id="judul" placeholder="Masukkan judul artikel"
                    class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none">
            </div>

            <div class="mb-6">
                <label for="deskripsi" class="block mb-2">Deskripsi Singkat</label>
                <input type="text" id="deskripsi" placeholder="Masukkan deskripsi singkat"
                    class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none">
            </div>

            <div class="mb-6">
                <label for="konten" class="block mb-2">Konten Artikel</label>
                <textarea id="konten" rows="6" placeholder="Masukkan konten artikel"
                    class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none resize-none"></textarea>
            </div>

            <div class="mb-6">
                <label for="gambar" class="block mb-2">Gambar Artikel</label>
                <input type="file" id="gambar" accept="image/*"
                    class="w-full p-3 rounded bg-[#333] text-white file:bg-[#00bfff] file:border-none file:rounded file:px-4 file:py-2 file:text-white file:cursor-pointer file:hover:bg-[#009acd]">
            </div>

            <button type="submit"
                class="w-full p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded">
                Tambah Artikel
            </button>
        </form>
    </div>
</div>

</body>
</html>
