<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'video' => 'required|string',
            'source' => 'required|string',
        ]);

        $video = new Video();
        $video->title = $validated['judul'];
        $video->desc = $validated['deskripsi'];
        $video->media = $validated['video'];
        $video->source = $validated['source'];
        $video->slug = Str::slug($validated['judul']);
        $video->module_id = 1; // default module_id, adjust if needed
        $video->quiz = ''; // default empty quiz
        $video->save();

        return redirect()->route('video_control')->with('success', 'Video berhasil ditambahkan.');
    }
}
