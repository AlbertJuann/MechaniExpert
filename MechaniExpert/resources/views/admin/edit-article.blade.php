<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Artikel - MechaniExpert</title>
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
        <div class="bg-[#222] p-6 rounded-lg shadow-md max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-6 text-center">Edit Artikel</h1>
            <form method="POST" action="{{ route('articles.update', $article->id) }}">
                @csrf
                @method('PUT')
                <label for="title" class="block mt-4 mb-1 font-semibold">Judul Artikel</label>
                <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <label for="thumbnail" class="block mt-6 mb-1 font-semibold">Thumbnail (Link GDrive)</label>
                <input type="text" id="thumbnail" name="thumbnail" value="{{ old('thumbnail', $article->thumbnail) }}" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <label for="excerpt" class="block mt-6 mb-1 font-semibold">Excerpt</label>
                <textarea id="excerpt" name="excerpt" rows="3" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('excerpt', $article->excerpt) }}</textarea>
                <label for="body" class="block mt-6 mb-1 font-semibold">Konten Artikel</label>
                <textarea id="body" name="body" rows="6" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('body', $article->body) }}</textarea>
                <label for="source" class="block mt-6 mb-1 font-semibold">Sumber (Optional)</label>
                <textarea id="source" name="source" rows="2" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('source', $article->source) }}</textarea>
                <label for="published_at" class="block mt-6 mb-1 font-semibold">Tanggal Publikasi (Optional)</label>
                <input type="text" id="published_at" name="published_at" value="{{ old('published_at') }}" class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="submit" class="mt-6 bg-cyan-500 hover:bg-cyan-600 text-white px-5 py-2 rounded">Simpan Perubahan</button>
            </form>
        </div>
    </main>
</body>
</html>
