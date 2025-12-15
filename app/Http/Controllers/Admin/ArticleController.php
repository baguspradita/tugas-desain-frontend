<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderByDesc('published_at')
            ->get();

        return view('admin.articles.index', compact('articles'));
    }

    public function create(): RedirectResponse
    {
        return redirect()->route('admin.articles.index');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('uploads/articles', 'public');
        }

        Article::create($data);

        return redirect()
            ->route('admin.articles.index')
            ->with('status', 'Artikel dibuat.');
    }

    public function edit(Article $article): View
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $data = $this->validated($request, true);

        $data['is_active'] = $request->boolean('is_active');

        if ($request->hasFile('image')) {
            if ($article->image_path) {
                Storage::disk('public')->delete($article->image_path);
            }
            $data['image_path'] = $request->file('image')->store('uploads/articles', 'public');
        }

        $article->update($data);

        return redirect()
            ->route('admin.articles.index')
            ->with('status', 'Artikel diperbarui.');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()
            ->route('admin.articles.index')
            ->with('status', 'Artikel dihapus.');
    }

    private function validated(Request $request, bool $isUpdate = false): array
    {
        return $request->validate([
            'title' => [$isUpdate ? 'sometimes' : 'required', 'string', 'max:255'],
            'body' => [$isUpdate ? 'sometimes' : 'required', 'string'],
            'image' => [$isUpdate ? 'sometimes' : 'nullable', 'image', 'max:2048'],
            'is_active' => ['sometimes', 'boolean'],
            'published_at' => ['sometimes', 'nullable', 'date'],
            // display_order disabled
        ]);
    }
}
