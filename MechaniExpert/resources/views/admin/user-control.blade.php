<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola User - MechaniExpert</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex font-sans bg-[#000000] text-white">

    <!-- Sidebar -->
    <div class="w-[250px] h-screen bg-[#000000] p-5 fixed top-0 left-0 shadow-md shadow-gray-800 z-50">
        <h2 class="text-center mb-5 text-2xl font-bold">Admin Panel</h2>
        <ul class="space-y-4">
            <li><a href="{{ url('/dashboard') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Dashboard</a></li>
            <li><a href="{{ url('/video-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola Video</a></li>
            <li><a href="{{ url('/article-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola Artikel</a></li>
            <li><a href="{{ url('/user-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola User</a></li>
            <li><a href="#" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Logout</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="ml-[250px] p-6 w-[calc(100%-250px)]">
    <h1 class="text-2xl font-bold mb-4">Kelola User</h1>

    <!-- Form Pencarian dan Filter -->
    <div class="mb-4 space-x-2">
        <!-- Input pencarian -->
        <input type="text" id="search" placeholder="Cari user..." class="p-2 rounded text-black" />
        <!-- Dropdown filter role -->
        <select id="roleFilter" class="p-2 rounded text-black">
        <option value="">Semua Peran</option>
        <option value="Admin">Admin</option>
        <option value="User">User</option>
        </select>
        <!-- Tombol cari -->
        <button class="p-2 bg-[#5bc0de] text-white rounded">Cari</button>
    </div>

    <!-- Tombol Tambah User -->
    <a href="#" class="inline-block mb-4 px-4 py-2 bg-[#2ecc71] text-white rounded hover:opacity-90">Tambah User</a>

    <!-- Tabel User -->
    <div class="bg-[#222] p-6 rounded-lg shadow-md">
        <table class="w-full border-collapse text-white">
        <thead>
            <tr class="bg-[#333]">
            <th class="p-2 border border-[#444] text-left">ID</th>
            <th class="p-2 border border-[#444] text-left">Nama</th>
            <th class="p-2 border border-[#444] text-left">Email</th>
            <th class="p-2 border border-[#444] text-left">Role</th>
            <th class="p-2 border border-[#444] text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td class="p-2 border border-[#444]">1</td>
            <td class="p-2 border border-[#444]">Albert</td>
            <td class="p-2 border border-[#444]">albert@gmail.com</td>
            <td class="p-2 border border-[#444]">Admin</td>
            <td class="p-2 border border-[#444]">
                <a href="#" class="px-3 py-1 bg-[#f39c12] text-white rounded mr-2 hover:opacity-90">Edit</a>
                <button class="px-3 py-1 bg-[#e74c3c] text-white rounded hover:opacity-90">Hapus</button>
            </td>
            </tr>
            <tr>
            <td class="p-2 border border-[#444]">2</td>
            <td class="p-2 border border-[#444]">Juan</td>
            <td class="p-2 border border-[#444]">juan@gmail.com</td>
            <td class="p-2 border border-[#444]">User</td>
            <td class="p-2 border border-[#444]">
            <a href="#" class="px-3 py-1 bg-[#f39c12] text-white rounded mr-2 hover:opacity-90">Edit</a>
                <button class="px-3 py-1 bg-[#e74c3c] text-white rounded hover:opacity-90">Hapus</button>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>

</body>
</html>
