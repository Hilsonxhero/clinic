<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Service;
use App\Models\Treatment;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        $landing = Page::getAll('landing');
        $services = Service::query()->where('status', Service::ACTIVE_STATUS)->get();
        $treatments = Treatment::query()->where('status', Treatment::PUBLISHED_STATUS)->get();
        $articles = Article::query()->where('status', Article::PUBLISHED_STATUS)->get();
        return view('application.landing', compact('landing', 'services', 'treatments', 'articles'));
    }
}
