{{-- <!DOCTYPE html>
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
            <button type="submit" class="mt-6 w-full p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded"> Tambah Video </button>
        </form>
    </div>
    </div>


</body>
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Video - MechaniExpert</title>
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
        <div class="bg-[#222] p-8 rounded-xl w-full h-full shadow-lg shadow-gray-600">
            <h1 class="text-3xl font-bold mb-8 text-center">Tambah Video Baru</h1>
            <form method="post" action="{{ route('videos.store') }}">
                @csrf
                <div class="mb-6">
                    <label for="judul" class="block mb-2">Judul Video</label>
                    <input type="text" id="judul" name="judul" placeholder="Masukkan judul video"
                        class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none" required>
                </div>

                <div class="mb-6">
                    <label for="category" class="block mb-2">Kategori</label>
                    <select id="category" name="category" 
                        class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <label for="deskripsi" class="block mb-2">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" rows="6" placeholder="Masukkan deskripsi video"
                        class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none resize-none" required></textarea>
                </div>

                <div class="mb-6">
                    <label for="video" class="block mb-2">Upload Video (LINK)</label>
                    <input type="text" id="video" name="video" placeholder="Masukkan link video"
                        class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none" required>
                </div>

                <div class="mb-6">
                    <label for="quiz" class="block mb-2">Upload Quiz (LINK)</label>
                    <input type="text" id="quiz" name="quiz" placeholder="Masukkan link quiz"
                        class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none" required>
                </div>

                <div class="mb-6">
                    <label for="source" class="block mb-2">Source</label>
                    <input type="text" id="source" name="source" placeholder="Masukkan source"
                        class="w-full p-3 rounded bg-[#333] text-white border-none focus:outline-none" required>
                </div>

                <button type="submit"
                    class="w-full p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded">
                    Tambah Video
                </button>
            </form>
        </div>
    </div>

</body>
</html>