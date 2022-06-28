<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class TreatmentController extends Controller
{
    public function index(Request $request)
    {

        $popular_treatments = Treatment::query()->orderByDesc('views')->take('6')->get();

        $treatments = Treatment::query()->where('status', Treatment::PUBLISHED_STATUS)
            ->orderByDesc('created_at')->paginate(12);
        $hasMorePages = $treatments->hasMorePages();
        if ($request->wantsJson()) {
            $view = view('components.treatment.treatment-item', compact('treatments'))->render();
            return response()->json([
                'html' => $view,
                'has_more' => $hasMorePages
            ]);
        }


        return view('application.treatments.index', compact('treatments', 'popular_treatments'));
    }

    public function show($slug)
    {
        try {
            $treatment = Treatment::query()->where('slug', $slug)->firstOrFail();
            SEOMeta::addKeyword($treatment->meta->keywords_value);
            $this->seo()->setTitle($treatment->meta->title);
            $this->seo()->setDescription($treatment->meta->description);
            $this->seo()->opengraph()->addImage(asset($treatment->banner));
            $this->seo()->jsonLd()->addImage(asset($treatment->banner));
            $related_treatments = Treatment::query()->where('category_id', $treatment->category_id)->take(6)->orderByDesc('created_at')->get();
            $latest_treatments = Treatment::query()->take(6)->orderByDesc('created_at')->get();
            return view('application.treatments.show', compact('treatment', 'related_treatments', 'latest_treatments'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            //throw $th;
        }
    }
}
