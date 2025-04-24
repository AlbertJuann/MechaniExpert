<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VideoCategory;
use Illuminate\Support\Str;

class VideoCategoryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|string',
        ]);

        $category = new VideoCategory();
        $category->title = $validated['title'];
        $category->thumbnail = $validated['thumbnail'];
        $category->slug = Str::slug($validated['title']);
        $category->save();

        return redirect()->route('video_category_control')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $category = VideoCategory::findOrFail($id);
        return view('admin.edit-video-category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = VideoCategory::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'required|string',
        ]);

        $category->title = $validated['title'];
        $category->thumbnail = $validated['thumbnail'];
        $category->slug = Str::slug($validated['title']);
        $category->save();

        return redirect()->route('video_category_control')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $category = VideoCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('video_category_control')->with('success', 'Kategori berhasil dihapus.');
    }
}
