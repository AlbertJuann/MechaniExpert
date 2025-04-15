<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori Video - MechaniExpert</title>
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

    <!-- Content -->
    <div class="ml-[250px] bg-[#000000]flex flex-col w-full p-10 min-h-screen">
        <h1 class="text-3xl font-bold mb-6">Tambah Kategori Video</h1>
        <div class="bg-[#222] p-6 rounded-lg shadow-lg w-full max-w-xl">
            <form>
                <div class="mb-4">
                    <label for="kategori" class="block mb-2">Nama Kategori</label>
                    <input type="text" id="kategori" name="kategori" placeholder="Masukkan nama kategori..."
                        class="w-full p-3 rounded bg-[#333] text-white focus:outline-none focus:ring-2 focus:ring-[#5bc0de]">
                </div>
                <button type="submit"
                    class="w-full py-3 bg-[#5bc0de] hover:bg-[#31b0d5] text-white font-semibold rounded">
                    Simpan
                </button>
            </form>
        </div>
    </div>

</body>
</html>
