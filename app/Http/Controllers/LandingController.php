<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class LandingController extends Controller
{
    public function landing()
    {
        $setting = Setting::getAll();
        $this->seo()->setTitle($setting->project_name);
        $this->seo()->setDescription($setting->project_description);
        $this->seo()->opengraph()->setUrl('https://cliniceomid.com');
        $this->seo()->opengraph()->addProperty('type', 'articles');
        $this->seo()->jsonLd()->addImage('Article');
        $this->seo()->jsonLd()->setType('Article');

        // $this->seo()->jsonLd()->setTitle('Article title');
        // $this->seo()->jsonLd()->setDescription('Article description');


        $landing = Page::getAll('landing');

        $services = Service::query()->where('status', Service::ACTIVE_STATUS)->get();
        $treatments = Treatment::query()->where('status', Treatment::PUBLISHED_STATUS)->get();
        $articles = Article::query()->where('status', Article::PUBLISHED_STATUS)->get();
        $portfolios = Portfolio::query()->where('status', Portfolio::ACTIVE_STATUS)->get();
        return view('application.landing', compact(
            'landing',
            'services',
            'treatments',
            'articles',
            'portfolios'
        ));
    }
}
