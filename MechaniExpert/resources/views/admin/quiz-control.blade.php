@extends('admin.dashboard')
@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Kelola Quiz</h1>
    <div class="bg-[#222] p-6 rounded-lg shadow-md">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-[#333]">
                    <th class="p-2 border border-[#444] text-left">ID</th>
                    <th class="p-2 border border-[#444] text-left">Judul Video</th>
                    <th class="p-2 border border-[#444] text-left">Jumlah Quiz</th>
                    <th class="p-2 border border-[#444] text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videos as $video)
                <tr>
                    <td class="p-2 border border-[#444]">{{ $video->id }}</td>
                    <td class="p-2 border border-[#444]">{{ $video->title }}</td>
                    <td class="p-2 border border-[#444]">{{ $video->quizzes->count() }}</td>
                    <td class="p-2 border border-[#444]">
                        <a href="{{ route('admin.quiz.show', $video->id) }}" class="px-3 py-1 bg-blue-600 text-white rounded hover:opacity-90">Lihat/Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
