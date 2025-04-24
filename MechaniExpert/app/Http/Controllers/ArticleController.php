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

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'thumbnail' => 'nullable|string',
            'source' => 'nullable|string',
            'published_at' => 'nullable|date',
        ]);

        $article->title = $validated['title'];
        $article->excerpt = $validated['excerpt'];
        $article->body = $validated['body'];
        $article->source = $validated['source'] ?? null;
        $article->slug = Str::slug($validated['title']);

        if (!empty($validated['published_at'])) {
            $article->published_at = \Carbon\Carbon::parse($validated['published_at']);
        } else {
            $article->published_at = null;
        }

        $article->thumbnail = $validated['thumbnail'] ?? $article->thumbnail;

        $article->save();

        return redirect()->route('article_control')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('article_control')->with('success', 'Article berhasil dihapus.');
    }
}
