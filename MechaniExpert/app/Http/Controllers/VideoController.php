<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoCategory;
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
            'category' => 'required|integer',
        ]);

        $video = new Video();
        $video->title = $validated['judul'];
        $video->desc = $validated['deskripsi'];
        $video->media = $validated['video'];
        $video->source = $validated['source'];
        $video->slug = Str::slug($validated['judul']);
        $video->module_id = $validated['category'];
        $video->quiz = '';
        $video->save();

        return redirect()->route('video_control')->with('success', 'Video berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'video' => 'required|string',
            'source' => 'required|string',
            'category' => 'required|integer',
        ]);

        $video = Video::findOrFail($id);
        $video->title = $validated['judul'];
        $video->desc = $validated['deskripsi'];
        $video->media = $validated['video'];
        $video->source = $validated['source'];
        $video->slug = Str::slug($validated['judul']);
        $video->module_id = $validated['category'];
        $video->save();

        return redirect()->route('video_control')->with('success', 'Video berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('video_control')->with('success', 'Video berhasil dihapus.');
    }

}
