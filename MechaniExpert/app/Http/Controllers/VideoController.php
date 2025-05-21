<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\VideoCategory;
use Illuminate\Support\Str;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'video' => 'required|string',
            'quiz' => 'required|string',
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
        $video->quiz = $validated['quiz'];
        $video->save();

        return redirect()->route('video_control')->with('success', 'Video berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'video' => 'required|string',
            'quiz' => 'required|string',
            'source' => 'required|string',
            'category' => 'required|integer',
        ]);

        $video = Video::findOrFail($id);
        $video->title = $validated['judul'];
        $video->desc = $validated['deskripsi'];
        $video->media = $validated['video'];
        $video->quiz = $validated['quiz'];
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

    public function storeComment(Request $request, $id)
    {
        $video = Video::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'user_name' => 'required|string|max:255',
            'comment_text' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $video->comments()->create([
            'user_name' => $request->input('user_name'),
            'comment_text' => $request->input('comment_text'),
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
