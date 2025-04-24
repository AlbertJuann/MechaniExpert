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
        $video->module_id = 1; 
        $video->quiz = ''; // default empty quiz
        $video->save();

        return redirect()->route('video_control')->with('success', 'Video berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'video' => 'nullable|file|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime',
            'source' => 'required|string',
        ]);

        $video = Video::findOrFail($id);
        $video->title = $validated['judul'];
        $video->desc = $validated['deskripsi'];

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('videos'), $filename);
            $video->media = 'videos/' . $filename;
        }

        $video->source = $validated['source'];
        $video->slug = Str::slug($validated['judul']);
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
