<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Quiz - MechaniExpert</title>
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
                <li><a href="{{ url('/quiz-control') }}" class="block px-4 py-2 bg-[#333] rounded hover:bg-[#444]">Kelola Quiz</a></li>
            </ul>
        </div>
        <div class="pt-5">
            <div class="space-y-4">
                <a href="{{ route('home') }}" class="block px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded text-center">Home</a>
                <form method="POST" action="{{ route('logout') }}" class="bg-red-600 hover:bg-red-700 rounded text-center block px-4 py-2">
                    @csrf
                    <button type="submit" class="text-white hover:underline block lg:inline border-none p-0 cursor-pointer">Logout</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Content -->
    <div class="ml-[250px] p-6 w-[calc(100%-250px)] flex justify-center items-center min-h-screen">
        <div class="bg-[#222] p-8 rounded-lg shadow-md w-full max-w-5xl">
            <h1 class="text-2xl font-bold mb-6 text-center">Tambah Quiz untuk Video: {{ $video->title }}</h1>
            <form action="{{ route('admin.quiz.store', $video->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block mb-2">Pertanyaan</label>
                    <input type="text" name="question" class="w-full p-3 rounded bg-[#333] text-white" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-2">Jawaban (Minimal 2)</label>
                    @for($i=0;$i<4;$i++)
                        <input type="text" name="options[]" class="w-full p-3 rounded bg-[#333] text-white mb-2" placeholder="Jawaban {{ chr(65+$i) }}" required>
                    @endfor
                </div>
                <div class="mb-6">
                    <label class="block mb-2">Jawaban Benar</label>
                    <select name="correct_answer" class="w-full p-3 rounded bg-[#333] text-white" required>
                        @for($i=0;$i<4;$i++)
                            <option value="{{ $i }}">{{ chr(65+$i) }}</option>
                        @endfor
                    </select>
                </div>
                <button type="submit" class="w-full bg-[#00bfff] text-white text-lg py-3 rounded hover:bg-[#0099cc]">Simpan</button>
                <a href="{{ route('admin.quiz.show', $video->id) }}" class="block text-center mt-4 text-gray-300">Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
