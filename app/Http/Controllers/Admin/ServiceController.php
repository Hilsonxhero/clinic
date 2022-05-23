<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::query()->get();
        return view('panel.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();

        return view('panel.services.create', compact('categories'));
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

        if ($request->file('icon')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('icon'))->id]);

        $service = Service::query()->create([
            'title' => $request->title,
            'media_id' => $request->media_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        return redirect()->route('panel.services.index')
            ->with('success', 'ایجاد سرویس با موفقیت انجام شد');
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
        $service = Service::query()->where('id', $id)->first();
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();
        return view('panel.services.edit', compact('service', 'categories'));
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
        $service = Service::query()->where('id', $id)->first();

        $request->validate([
            'title' => ['required', 'min:4', 'string'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'description' => ['required'],
            'status' => ['required'],
        ]);


        if ($request->file('icon')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('icon'))->id]);
            if ($service->media) $service->media()->delete();
        } else {
            $request->merge(['media_id' => $service->media_id]);
        }

        $service->update([
            'title' => $request->title,
            'media_id' => $request->media_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        return redirect()->route('panel.services.index')
            ->with('success', 'ویرایش سرویس با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Service::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف سرویس با موفقیت انجام شد');
    }
}
