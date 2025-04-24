<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Kelola Video - MechaniExpert</title>
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
        <a href="#" class="block px-4 py-2 bg-red-600 hover:bg-red-700 rounded text-center">Logout</a>
    </div>
    </div>

    <!-- Content -->
    <div class="ml-[250px] p-6 w-[calc(100%-250px)]">
    <h1 class="text-2xl font-bold mb-4">Kelola Video</h1>

    <!-- Tombol Tambah -->
    <a href="{{ route("add_video") }}" class="inline-block mb-4 px-4 py-2 bg-[#2ecc71] text-white rounded hover:opacity-90">Tambah Video</a>
    <a href="{{ route("video_category_control") }}" class="inline-block mb-4 px-4 py-2 bg-[#2ecc71] text-white rounded hover:opacity-90">Kelola Kategori</a>

    <!-- Tabel -->
    <div class="bg-[#222] p-6 rounded-lg shadow-md">
        <table class="w-full border-collapse">
        <thead>
            <tr class="bg-[#333]">
            <th class="p-2 border border-[#444] text-left">ID</th>
            <th class="p-2 border border-[#444] text-left">Judul Video</th>
            <th class="p-2 border border-[#444] text-left">Kategori</th>
            <th class="p-2 border border-[#444] text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $video)
            <tr>
                <td class="p-2 border border-[#444]">{{ $video->id }}</td>
                <td class="p-2 border border-[#444]">{{ $video->title }}</td>
                <td class="p-2 border border-[#444]">{{ $video->category ? $video->category->name : '-' }}</td>
                <td class="p-2 border border-[#444]">
                    <a href="{{ route('edit_video', ['id' => $video->id]) }}" class="px-3 py-1 bg-[#f39c12] text-white rounded mr-2 hover:opacity-90">Edit</a>
                    <form action="{{ route('videos.destroy', ['id' => $video->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-[#e74c3c] text-white rounded hover:opacity-90" onclick="return confirm('Are you sure you want to delete this video?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
        </table>
    </div>
    </div>
</body>
</html>

