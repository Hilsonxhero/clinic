<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function landing()
    {
        $data = (object) Page::query()->where('name', 'landing')->firstOrCreate(
            ['name' => 'landing'],
            ['value' =>  ['title' => 'عنوان اصلی', 'subtitle' => 'عنوان', 'pic1' => '', 'pic2' => '', 'about_title' => 'عنوان درباره ما', 'about_body' => 'متن درباره ما',]]
        )->value;

        return view('panel.pages.landing', compact('data'));
    }


    public function landingStore(Request $request)
    {

        $request->validate([
            'title' => ['required'],
            'subtitle' => ['required'],
            'about_title' => ['required'],
            'about_body' => ['required']
        ]);

        // dd($request->all());

        $about_data =  Page::query()->where('name', 'landing')->first()->value;

        foreach ($request->files as $key => $value) {
            if ($request->file($key)) {
                $request->merge([$key . '_path' => MediaFileService::publicUpload($request->file($key))->files['original']]);
            }
        }

        if (!$request->file('pic1')) {
            $request->merge(['pic1_path' => $about_data['pic1']]);
        }
        if (!$request->file('pic2')) {
            $request->merge(['pic2_path' => $about_data['pic2']]);
        }


        $data = [
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'about_title' => $request->about_title,
            'about_body' => $request->about_body,
            'pic1' => $request->pic1_path,
            'pic2' => $request->pic2_path,
        ];

        Page::query()->updateOrCreate(
            ['name' => 'landing'],
            ['value' =>  $data]
        );

        return redirect()->back()->with('success', '  ذخیره تغییرات با موفقیت انجام شد');
    }


    public function services(Request $request)
    {
    }

    public function about()
    {
        $data = (object) Page::query()->where('name', 'about')->firstOrCreate(
            ['name' => 'about'],
            ['value' =>  ['title' => 'درباره ما', 'body' => 'متن درباره ما', 'pic1' => '', 'pic2' => '', 'pic3' => '', 'pic4' => '',]]
        )->value;

        return view('panel.pages.about', compact('data'));
    }

    public function aboutStore(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);

        $about_data =  Page::query()->where('name', 'about')->first()->value;

        foreach ($request->files as $key => $value) {
            if ($request->file($key)) {
                $request->merge([$key . '_path' => MediaFileService::publicUpload($request->file($key))->files['original']]);
            }
        }

        if (!$request->file('pic1')) {
            $request->merge(['pic1_path' => $about_data['pic1']]);
        }
        if (!$request->file('pic2')) {
            $request->merge(['pic2_path' => $about_data['pic2']]);
        }
        if (!$request->file('pic3')) {
            $request->merge(['pic3_path' => $about_data['pic3']]);
        }
        if (!$request->file('pic4')) {
            $request->merge(['pic4_path' => $about_data['pic4']]);
        }

        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'pic1' => $request->pic1_path,
            'pic2' => $request->pic2_path,
            'pic3' => $request->pic3_path,
            'pic4' => $request->pic4_path,
        ];

        Page::query()->updateOrCreate(
            ['name' => 'about'],
            ['value' =>  $data]
        );

        return redirect()->back()->with('success', '  ذخیره تغییرات با موفقیت انجام شد');
    }



    public function contact(Request $request)
    {
    }

    public function members(Request $request)
    {
    }
}
