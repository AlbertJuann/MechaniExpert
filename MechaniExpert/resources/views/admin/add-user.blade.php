<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tambah User - MechaniExpert</title>
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
<div class="ml-[250px] bg-[#000000] min-h-screen flex items-center justify-center p-10">
  <div class="bg-[#222] p-8 rounded-xl w-full mx-10 shadow-lg shadow-gray-600">
    <h1 class="text-3xl font-bold text-center mb-6">Tambah User Baru</h1>
    <form method="post" action="{{ route('users.store') }}">
      @csrf
      <!-- Username -->
      <label for="username" class="block mt-2">Username</label>
      <input type="text" id="username" name="username" placeholder="Masukkan username" class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" required/>

      <!-- Nama Lengkap -->
      <label for="name" class="block mt-2">Nama Lengkap</label>
      <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap" class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" required/>

      <!-- Phone -->
      <label for="phone" class="block mt-2">Nomor Telepon</label>
      <input type="text" id="phone" name="phone" placeholder="Masukkan nomor telepon" class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" required/>

      <!-- Email -->
      <label for="email" class="block mt-4">Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email" class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" required/>

      <!-- Password -->
      <label for="password" class="block mt-4">Password</label>
      <input type="password" id="password" name="password" placeholder="Masukkan password" class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" required/>

      <!-- Role -->
      <label for="role" class="block mt-4">Peran</label>
      <select id="role" name="role" class="w-full p-3 mt-1 rounded bg-[#333] text-white focus:outline-none" required>
        <option value="">Pilih peran</option>
        <option value="1">Admin</option>
        <option value="0">User</option>
      </select>

      <!-- Tombol Submit -->
      <button type="submit"
              class="mt-6 w-full p-4 bg-[#00bfff] hover:bg-[#009acd] text-white text-lg font-semibold rounded">
        Tambah User
      </button>
    </form>
  </div>
</div>

</body>
</html>
