<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Video - MechaniExpert</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1e1e1e] text-white font-sans">

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
        <a href="#" class="block px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-center">Logout</a>
    </div>
    </div>

    <!-- Main Content -->
    <div class="ml-[250px] min-h-screen p-10 bg-[#000000] flex items-center justify-center">
    <div class="w-full bg-[#222] rounded-xl shadow-lg shadow-gray-600 p-8 max-w-4xl">
        <h1 class="text-3xl font-bold text-center mb-6">Tambah Video Baru</h1>
        <form method="post" action="{{ route('videos.store') }}">
            @csrf
            <label for="judul" class="block mt-2">Judul Video</label>
            <input type="text" id="judul" name="judul" required class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" />
            <label for="category" class="block mt-4">Kategori</label>
            <select id="category" name="category" required class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <label for="deskripsi" class="block mt-4">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi" rows="4" required class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none resize-none"></textarea>
            <label for="video" class="block mt-4">Upload Video ( LINK )</label>
            <input type="text" id="video" name="video" required class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" />
            <label for="quiz" class="block mt-4">Upload Quiz ( LINK )</label>
            <input type="text" id="quiz" name="quiz" required class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" />
            <label for="source" class="block mt-4">Source</label>
            <input type="text" id="source" name="source" required class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" />
            <button type="submit" class="mt-6 w-full p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded"> Simpan </button>
        </form>
    </div>
    </div>

</body>
</html>
