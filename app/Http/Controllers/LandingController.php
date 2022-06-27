<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        $landing = Page::getAll('landing');
        $setting = Setting::getAll();
        $services = Service::query()->where('status', Service::ACTIVE_STATUS)->get();
        $treatments = Treatment::query()->where('status', Treatment::PUBLISHED_STATUS)->get();
        $articles = Article::query()->where('status', Article::PUBLISHED_STATUS)->get();
        $portfolios = Portfolio::query()->where('status', Portfolio::ACTIVE_STATUS)->get();
        return view('application.landing', compact(
            'landing',
            'services',
            'treatments',
            'articles',
            'setting',
            'portfolios'
        ));
    }
}
