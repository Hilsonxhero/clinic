<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\MediaFileService;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::query()->get();
        return view('panel.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();

        return view('panel.portfolios.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'min:4', 'string'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'description' => ['required'],
            'status' => ['required'],
        ]);

        if ($request->file('file')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('file'))->id]);

        $portfolio = Portfolio::query()->create([
            'title' => $request->title,
            'media_id' => $request->media_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'tags' => json_decode($request->tags)
        ]);


        $portfolio->meta()->create([
            "title" => $request->meta_title,
            "description" => $request->meta_description,
            "keywords" => json_decode($request->meta_keywords),
        ]);

        return redirect()->route('panel.portfolios.index')
            ->with('success', 'ایجاد نمونه کار با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::query()->where('id', $id)->first();
        // dd($portfolio);
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();
        return view('panel.portfolios.edit', compact('portfolio', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $portfolio = Portfolio::query()->where('id', $id)->first();

        $request->validate([
            'title' => ['required', 'min:4', 'string'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'description' => ['required'],
            'status' => ['required'],
        ]);


        if ($request->file('file')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('file'))->id]);
            if ($portfolio->media) $portfolio->media()->delete();
        } else {
            $request->merge(['media_id' => $portfolio->media_id]);
        }

        $portfolio->update([
            'title' => $request->title,
            'media_id' => $request->media_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'tags' => json_decode($request->tags)
        ]);

        $portfolio->meta()->update([
            "title" => $request->meta_title,
            "description" => $request->meta_description,
            "keywords" => json_decode($request->meta_keywords),
        ]);

        return redirect()->route('panel.portfolios.index')
            ->with('success', 'ویرایش نمونه کار با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Portfolio::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف نمونه کار با موفقیت انجام شد');
    }
}
