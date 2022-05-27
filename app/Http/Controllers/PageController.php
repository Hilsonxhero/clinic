<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $about = Page::page('about');
        return view('application.pages.about', compact('about'));
    }
    public function contacts()
    {

        return view('application.pages.contacts');
    }
}
