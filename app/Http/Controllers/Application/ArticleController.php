<?php

namespace App\Http\Controllers\Application;

use Carbon\Carbon;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOMeta;

class ArticleController extends Controller
{
    public function index(Request $request)
    {

        $popular_articles = Article::query()->orderByDesc('views')->take('6')->get();

        $articles = Article::query()->where('status', Article::PUBLISHED_STATUS)
            ->orderByDesc('created_at')->paginate(12);
        $hasMorePages = $articles->hasMorePages();
        if ($request->wantsJson()) {
            $view = view('components.article.article-item', compact('articles'))->render();
            return response()->json([
                'html' => $view,
                'has_more' => $hasMorePages
            ]);
        }


        return view('application.articles.index', compact('articles', 'popular_articles'));
    }

    public function show(Request $request, $slug)
    {
        $setting = Setting::getAll();


        try {
            $article = Article::query()->where('slug', $slug)->firstOrFail();
            // dd($article->meta->keywords_value);
            SEOMeta::addKeyword($article->meta->keywords_value);
            $this->seo()->setTitle($article->meta->title);
            $this->seo()->setTitle($article->meta->title);
            $this->seo()->setDescription($article->meta->description);
            $this->seo()->opengraph()->addProperty('type', 'Article');
            $this->seo()->opengraph()->addImage(asset($article->banner));
            $this->seo()->jsonLd()->addImage(asset($article->banner));
            $this->seo()->jsonLd()->setType('Article');
            $related_articles = Article::query()->where('category_id', $article->category_id)->take(6)->orderByDesc('created_at')->get();
            $latest_articles = Article::query()->take(6)->orderByDesc('created_at')->get();
            return view('application.articles.show', compact('article', 'related_articles', 'latest_articles'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            //throw $th;
        }
    }
}
