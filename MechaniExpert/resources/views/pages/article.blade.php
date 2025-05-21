@extends('layouts.main')

@section('content') 

    <!-- Konten Artikel -->
    <div class="max-w-3xl mx-auto mt-20 p-6 bg-gray-800 rounded-lg shadow-lg">
        <h1 class="text-white text-3xl font-bold mb-4 text-center">{!! $article->title !!}</h1>
        <img src="https://drive.google.com/thumbnail?id={{$article->thumbnail}}" alt="Gambar Artikel" class="w-full rounded-lg mb-6">
        <div class="text-white text-lg leading-relaxed mb-4">{!! $article->excerpt !!}</div>
        <div class="text-white text-lg leading-relaxed mb-4">{!! $article->body !!}</div>
        <p class="text-gray-400 text-sm mb-4">Published on: {{ $article->published_at }}</p>
        <a href="{{ route('articles') }}" class="block mt-6 py-3 px-6 bg-blue-500 text-white text-center rounded-lg text-lg hover:bg-blue-700">Kembali ke Artikel</a>
    </div>

    <section class="max-w-3xl mx-auto mt-12 p-6 bg-gray-800 rounded-lg shadow-lg">
        <h3 class="text-2xl font-bold mb-4 text-white">Comments</h3>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-600 text-white rounded">
                {{ session('success') }}
            </div>
        @endif

        @foreach($article->comments as $comment)
            <div class="mb-4 p-4 bg-gray-700 rounded">
                <p class="font-semibold text-white">{{ $comment->user_name }}</p>
                <p class="text-white">{!! $comment->comment_text !!}</p>
                <p class="text-gray-400 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
        @endforeach

        <form action="{{ route('articles.comments.store', $article->id) }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="user_name" class="block text-white mb-2">Name</label>
                <input type="text" id="user_name" name="user_name" class="w-full text-black p-2 rounded text-black placeholder-black" value="{{ old('user_name') }}" required>
                @error('user_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="comment_text" class="block text-white mb-2">Comment</label>
                <textarea id="comment_text" name="comment_text" class="w-full text-black p-2 rounded" required>{{ old('comment_text') }}</textarea>
                @error('comment_text')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit Comment</button>
        </form>
    </section>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('comment_text');
</script>
@endsection
