<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {

        $popular_portfolios = Portfolio::query()->orderByDesc('views')->take('6')->get();

        $portfolios = Portfolio::query()->where('status', Portfolio::ACTIVE_STATUS)
            ->orderByDesc('created_at')->paginate(12);
        $hasMorePages = $portfolios->hasMorePages();
        if ($request->wantsJson()) {
            $view = view('components.portfolio.portfolio-item', compact('portfolios'))->render();
            return response()->json([
                'html' => $view,
                'has_more' => $hasMorePages
            ]);
        }


        return view('application.portfolios.index', compact('portfolios', 'popular_portfolios'));
    }

    public function show(Request $request, $slug)
    {
        try {
            $portfolio = Portfolio::query()->where('slug', $slug)->firstOrFail();
            $this->seo()->setTitle($portfolio->title);
            $this->seo()->setDescription($portfolio->meta->description);
            $this->seo()->opengraph()->addProperty('type', 'Portfolio');
            $this->seo()->opengraph()->addImage(asset($portfolio->file));
            $this->seo()->jsonLd()->addImage(asset($portfolio->file));
            $this->seo()->jsonLd()->setType('Portfolio');
            $related_portfolios = Portfolio::query()->where('category_id', $portfolio->category_id)->take(6)->orderByDesc('created_at')->get();
            $latest_portfolios = Portfolio::query()->take(6)->orderByDesc('created_at')->get();
            return view('application.portfolios.show', compact('portfolio', 'related_portfolios', 'latest_portfolios'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            //throw $th;
        }
    }
}
