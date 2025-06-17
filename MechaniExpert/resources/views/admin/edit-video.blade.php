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

    <!-- Content -->
    <main class="ml-64 w-full p-8 mt-6">
        <div class="bg-[#222] p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-6 text-center">Edit Video</h1>
        <form method="POST" action="{{ route('videos.update', ['id' => $video->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="judul" class="block mt-4 mb-1 font-semibold">Judul Video</label>
            <input type="text" id="judul" name="judul" value="{{ old('judul', $video->title) }}" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

            <label for="category" class="block mt-6 mb-1 font-semibold">Kategori</label>
            <select id="category" name="category" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $video->module_id == $category->id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>

            <label for="deskripsi" class="block mt-6 mb-1 font-semibold">Deskripsi Video</label>
            <textarea id="deskripsi" name="deskripsi" rows="6" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('deskripsi', $video->desc) }}</textarea>

            <label for="video" class="block mt-6 mb-1 font-semibold">Ubah Video</label>
            <input type="text" id="video" name="video" value="{{ old('video', $video->media) }}" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

            <label for="quiz" class="block mt-4">Ubah Quiz ( LINK )</label>
            <input type="text" id="quiz" name="quiz" required class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" />

            <label for="source" class="block mt-6 mb-1 font-semibold">Source</label>
            <input type="text" id="source" name="source" value="{{ old('source', $video->source) }}" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">

            <button type="submit" class="w-full mt-8 p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded">Simpan Perubahan</button>
        </form>
        </div>
    </main>
</body>
</html>
