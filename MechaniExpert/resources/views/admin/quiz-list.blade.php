@extends('admin.dashboard')
@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Quiz untuk Video: {{ $video->title }}</h1>
    <a href="{{ route('admin.quiz.create', $video->id) }}" class="inline-block mb-4 px-4 py-2 bg-[#2ecc71] text-white rounded hover:opacity-90">Tambah Quiz</a>
    <div class="bg-[#222] p-6 rounded-lg shadow-md">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-[#333]">
                    <th class="p-2 border border-[#444] text-left">ID</th>
                    <th class="p-2 border border-[#444] text-left">Pertanyaan</th>
                    <th class="p-2 border border-[#444] text-left">Jawaban Benar</th>
                    <th class="p-2 border border-[#444] text-left">Jawaban Salah</th>
                    <th class="p-2 border border-[#444] text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($video->quizzes as $quiz)
                <tr>
                    <td class="p-2 border border-[#444]">{{ $quiz->id }}</td>
                    <td class="p-2 border border-[#444]">{{ $quiz->question }}</td>
                    <td class="p-2 border border-[#444]">
                        @php $correct = $quiz->options->where('option_index', $quiz->correct_answer)->first(); @endphp
                        {{ $correct ? $correct->option_text : '-' }}
                    </td>
                    <td class="p-2 border border-[#444]">
                        @foreach($quiz->options->where('option_index', '!=', $quiz->correct_answer) as $wrong)
                            <div>{{ $wrong->option_text }}</div>
                        @endforeach
                    </td>
                    <td class="p-2 border border-[#444]">
                        <a href="{{ route('admin.quiz.edit', $quiz->id) }}" class="px-3 py-1 bg-[#f39c12] text-white rounded mr-2 hover:opacity-90">Edit</a>
                        <form action="{{ route('admin.quiz.destroy', $quiz->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-3 py-1 bg-[#e74c3c] text-white rounded hover:opacity-90" onclick="return confirm('Are you sure you want to delete this quiz?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
