<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class ArticlePageController extends Controller
{
    public function __invoke(): View
    {
        $articles = Article::query()
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->latest()
            ->get();

        return view('artikel', compact('articles'));
    }
}
