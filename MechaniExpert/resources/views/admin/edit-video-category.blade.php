<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Edit Kategori Video - MechaniExpert</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function confirmDelete() {
            return confirm('This action will delete your entire video in this category. Are you sure?');
        }
    </script>
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
            <div class="space-y-4">
                <a href="home" class="block px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-center">Home</a>
                <form method="POST" action="{{ route('logout') }}" class="bg-red-600 hover:bg-red-700 rounded text-center block px-4 py-2">
                    @csrf
                    <button type="submit" class="text-white hover:underline block lg:inline border-none p-0 cursor-pointer">Logout</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Content Full Width -->
    <div class="ml-[250px] min-h-screen p-8 bg-[#000000]">
    <form method="POST" action="{{ route('video_category_update', $category->id) }}" class="bg-[#222] p-8 rounded-xl shadow-lg shadow-gray-600 w-full">
        @csrf
        @method('PATCH')
        <h1 class="text-3xl font-bold mb-8 text-center">Edit Kategori Video</h1>

        <div class="mb-6">
            <label for="title" class="block mb-2 font-semibold">Nama Kategori:</label>
            <input type="text" id="title" name="title" value="{{ old('title', $category->title) }}" placeholder="Masukkan nama kategori" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none" required />
        </div>

        <div class="mb-6">
            <label for="thumbnail" class="block mb-2 font-semibold">Thumbnail URL:</label>
            <input type="text" id="thumbnail" name="thumbnail" value="{{ old('thumbnail', $category->thumbnail) }}" placeholder="Masukkan URL thumbnail" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none" required />
        </div>

        <button type="submit" class="w-full p-3 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded"> Simpan Perubahan </button>
    </form>
    </div>

</body>
</html>
