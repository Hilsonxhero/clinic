<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::query()->get();
        return view('panel.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();

        return view('panel.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
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



        $article = Article::query()->create([
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


        return redirect()->route('panel.articles.index')
            ->with('success', 'ایجاد مقاله با موفقیت انجام شد');
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
        $article = Article::query()->where('id', $id)->first();

        return view('panel.articles.edit', compact('categories', 'article'));
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

        $article = Article::query()->where('id', $id)->first();


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


        return redirect()->route('panel.articles.index')
            ->with('success', 'ویرایش مقاله با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Article::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف مقاله با موفقیت انجام شد');
    }
}
