<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit User - MechaniExpert</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#000000] text-white font-sans">

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
  <div class="ml-[250px] bg-[#000000] min-h-screen flex items-center justify-center p-6">
    <div class="bg-[#222] p-6 rounded-xl w-full max-w-3xl shadow-lg shadow-gray-600">
      <h1 class="text-center text-3xl font-bold mb-6">Edit User</h1>
      <form>
        <!-- Nama Lengkap -->
        <label for="nama" class="block mt-2">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="Nama User"
               class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none"/>

        <!-- Email -->
        <label for="email" class="block mt-4">Email</label>
        <input type="email" id="email" name="email" value="user@email.com"
               class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none"/>

        <!-- Password (Opsional) -->
        <label for="password" class="block mt-4">Password (biarkan kosong jika tidak ingin diubah)</label>
        <input type="password" id="password" name="password"
               class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none"/>

        <!-- Role -->
        <label for="role" class="block mt-4">Peran</label>
        <select id="role" name="role"
                class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none">
          <option value="admin">Admin</option>
          <option value="user" selected>User</option>
        </select>

        <!-- Tombol Submit -->
        <button type="submit"
                class="mt-6 w-full p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded">
          Simpan Perubahan
        </button>
      </form>
    </div>
  </div>

</body>
</html>
