<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $faqs = Question::query()->orderByDesc('created_at')->get();
        return view('application.faq.index', compact('faqs'));
    }
}
