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
    <h1 class="text-2xl font-bold mb-4">Kelola User</h1>

    <!-- Tombol Tambah User -->
    <a href="{{ route('add_user') }}" class="inline-block mb-4 px-4 py-2 bg-[#2ecc71] text-white rounded hover:opacity-90">Tambah User</a>

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
            @foreach($users as $user)
                <tr>
                <td class="p-2 border border-[#444]">{{ $user->id }}</td>
                <td class="p-2 border border-[#444]">{{ $user->name }}</td>
                <td class="p-2 border border-[#444]">{{ $user->email }}</td>
                <td class="p-2 border border-[#444]">{{ $user->role }}</td>
                <td class="p-2 border border-[#444]">
                    <a href="{{ route('edit_user', ['id' => $user->id]) }}" class="px-3 py-1 bg-[#f39c12] text-white rounded mr-2 hover:opacity-90">Edit</a>
                    <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-[#e74c3c] text-white rounded hover:opacity-90" onclick="return confirm('Are you sure you want to delete this user?')">Hapus</button>
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
