<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $popular_articles = Article::query()->orderByDesc('views')->take('6')->get();
        $articles = Article::query()->where('status', Article::PUBLISHED_STATUS)->orderByDesc('created_at')->get();
        return view('application.articles.index', compact('articles', 'popular_articles'));
    }

    public function show($slug)
    {
        try {
            $article = Article::query()->where('slug', $slug)->firstOrFail();
            $related_articles = Article::query()->where('category_id', $article->category_id)->take(6)->orderByDesc('created_at')->get();
            $latest_articles = Article::query()->take(6)->orderByDesc('created_at')->get();
            return view('application.articles.show', compact('article', 'related_articles', 'latest_articles'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            //throw $th;
        }
    }
}
