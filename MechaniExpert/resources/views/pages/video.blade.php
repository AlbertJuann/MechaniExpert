    @extends('layouts.main')

@section('content')

<section class="max-w-7xl mx-auto mt-24 p-6">
    <a href="{{ route('video_list', ['id' => $video->module_id]) }}" class="inline-block mb-6 text-white rounded-lg bg-gray-800 p-4 hover:underline">
        &larr; Back to Video List
    </a>
    <h2 class="text-3xl font-bold mb-6">{{ $video->title }}</h2>
    <div class="aspect-w-16 aspect-h-9">
        <iframe 
            src="https://www.youtube.com/embed/{{ $video->media }}" 
            title="{{ $video->title }}" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen
            class="w-full h-96 rounded-lg"
        ></iframe>
    </div>
    <p class="mt-4 text-white">{{ $video->desc }}</p>
    <p class="mt-4 text-white">{{ $video->source }}</p>
    <a href="{{ $video->quiz }}" target="_blank" class="inline-block mt-4 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Start a quiz
    </a>

    <section class="max-w-7xl mx-auto mt-12 p-6 bg-gray-800 rounded-lg">
        <h3 class="text-2xl font-bold mb-4 text-white">Comments</h3>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-600 text-white rounded">
                {{ session('success') }}
            </div>
        @endif

        @foreach($video->comments as $comment)
            <div class="mb-4 p-4 bg-gray-700 rounded">
                <p class="font-semibold text-white">{{ $comment->user_name }}</p>
                <p class="text-white">{{ $comment->comment_text }}</p>
                <p class="text-gray-400 text-sm">{{ $comment->created_at->diffForHumans() }}</p>
            </div>
        @endforeach

        <form action="{{ route('videos.comments.store', $video->id) }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <label for="user_name" class="block text-white mb-2">Name</label>
                <input type="text" id="user_name" name="user_name" class="w-full p-2 rounded text-black placeholder-black" value="{{ old('user_name') }}" required>
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
</section>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('comment_text');
</script>
@endsection
