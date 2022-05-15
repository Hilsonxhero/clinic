<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::query()->get();
        return view('panel.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->get();

        return view('panel.categories.create', compact('categories'));
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
            'description' => ['required', 'string'],
            'parent_id' => ['nullable', 'exists:categories,id'],
            'thumb' => ['nullable', 'file'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords' => ['required'],
        ]);

        if ($request->file('thumb')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('thumb'))->id]);



        $category = Category::query()->create([
            'title' => $request->title,
            'description' => $request->description,
            'media_id' => $request->media_id,
            'parent_id' => $request->parent_id,
        ]);

        $category->meta()->create([
            "title" => $request->meta_title,
            "description" => $request->meta_description,
            "keywords" => json_decode($request->meta_keywords),
        ]);


        return redirect()->route('panel.categories.index')
            ->with('success', 'ایجاد دسته بندی با موفقیت انجام شد');
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
        $categories = Category::query()->get();

        $category = Category::query()->where('id', $id)->first();

        // $values = array_map('array_pop', $category->meta->keywords);
        // $ww = implode(",",$values);

        // dd($ww);
        // dd($category->meta->keywords_data);

        return view('panel.categories.edit', compact('categories', 'category'));
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
            'description' => ['required', 'string'],
            'parent_id' => ['nullable', 'exists:categories,id'],
            'thumb' => ['nullable', 'file'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords' => ['required'],
        ]);

        $category = Category::query()->where('id', $id)->first();


        if ($request->file('thumb')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('thumb'))->id]);
            if ($category->media) $category->media()->delete();
        } else {
            $request->merge(['media_id' => $category->media_id]);
        }


        $category->update([
            'title' => $request->title,
            'description' => $request->description,
            'media_id' => $request->media_id,
            'parent_id' => $request->parent_id,
        ]);

        $category->meta()->update([
            "title" => $request->meta_title,
            "description" => $request->meta_description,
            "keywords" => json_decode($request->meta_keywords),
        ]);


        return redirect()->route('panel.categories.index')
            ->with('success', 'ویرایش دسته بندی با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Category::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف دسته بندی با موفقیت انجام شد');
    }
}
