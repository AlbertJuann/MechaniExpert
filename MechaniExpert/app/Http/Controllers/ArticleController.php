<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'thumbnail' => 'required|max:2048',
        ]);

        $article = new Article();
        $article->title = $validated['title'];
        $article->excerpt = $validated['excerpt'];
        $article->body = $validated['body'];
        $article->thumbnail = $validated['thumbnail'];
        $article->slug = Str::slug($validated['title']);
        $article->published_at = now();
        $article->save();

        return redirect()->route('article_control')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('article_control')->with('success', 'Article berhasil dihapus.');
    }
}
