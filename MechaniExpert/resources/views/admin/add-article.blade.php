<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Artikel - MechaniExpert</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include CKEditor 4.21.0 from CDN -->
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
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

<!-- Main Content -->
<div class="ml-[250px] w-full min-h-screen p-10">
    <div class="bg-[#222] p-8 rounded-xl w-full shadow-lg shadow-gray-600">
        <h1 class="text-3xl font-bold mb-8 text-center">Tambah Artikel Baru</h1>
        <form method="post" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="title" class="block mb-2">Judul Artikel</label>
                <input type="text" id="title" name="title" placeholder="Masukkan judul artikel"
                    class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none" required>
            </div>

            <div class="mb-6">
                <label for="excerpt" class="block mb-2">Deskripsi Singkat</label>
                <input type="text" id="excerpt" name="excerpt" placeholder="Masukkan deskripsi singkat"
                    class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none" required>
            </div>

            <div class="mb-6">
                <label for="body" class="block mb-2">Konten Artikel</label>
                <textarea id="body" name="body" rows="6" placeholder="Masukkan konten artikel"
                    class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none resize-none" required></textarea>
            </div>

            <div class="mb-6">
                <label for="thumbnail" class="block mb-2">Gambar Artikel</label>
                <input type="text" id="thumbnail" name="thumbnail" class="w-full p-3 rounded bg-[#333] text-white" required>
            </div>

            <button type="submit"
                class="w-full p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded">
                Tambah Artikel
            </button>
        </form>
    </div>
</div>

<script>
    CKEDITOR.replace('body', {
        height: 300,
        contentsCss: ['body {color: #fff; background-color: #1e1e1e; font-family: Helvetica, Arial, sans-serif; font-size: 14px;}']
    });
</script>

</body>
</html>
