<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Treatment;
use Illuminate\Http\Request;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;

class TreatmentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatment::query()->get();
        return view('panel.treatments.index', compact('treatments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();

        return view('panel.treatments.create', compact('categories'));
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
            'title' => ['required', 'min:3', 'string'],
            'body' => ['required'],
            'description' => ['nullable'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'banner' => ['nullable', 'file'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords' => ['required'],
        ]);

        if ($request->file('banner')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('banner'))->id]);

        $article = Treatment::query()->create([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'media_id' => $request->media_id,
            'category_id' => $request->category_id,
            'tags' => json_decode($request->tags)
        ]);

        $article->meta()->create([
            "title" => $request->meta_title,
            "description" => $request->meta_description,
            "keywords" => json_decode($request->meta_keywords),
        ]);


        return redirect()->route('panel.treatments.index')
            ->with('success', 'ایجاد روش درمان با موفقیت انجام شد');
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
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();
        $treatment = Treatment::query()->where('id', $id)->first();

        // $values = array_map('array_pop', $treatment->tags);
        // $ss = implode(",", $values);
        // dd($ss);

        return view('panel.treatments.edit', compact('categories', 'treatment'));
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
        $request->validate([
            'title' => ['required', 'min:3', 'string'],
            'body' => ['required'],
            'description' => ['nullable'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'banner' => ['nullable', 'file'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords' => ['required'],
        ]);

        $article = Treatment::query()->where('id', $id)->first();


        if ($request->file('banner')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('banner'))->id]);
            if ($article->media) $article->media()->delete();
        } else {

            $request->merge(['media_id' => $article->media_id]);
        }


        $article->update([
            'title' => $request->title,
            'description' => $request->description,
            'body' => $request->body,
            'media_id' => $request->media_id,
            'category_id' => $request->category_id,
            'tags' => json_decode($request->tags)
        ]);

        $article->meta()->update([
            "title" => $request->meta_title,
            "description" => $request->meta_description,
            "keywords" => json_decode($request->meta_keywords),
        ]);


        return redirect()->route('panel.treatments.index')
            ->with('success', 'ویرایش روش درمان با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Treatment::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف روش درمان با موفقیت انجام شد');
    }
}
