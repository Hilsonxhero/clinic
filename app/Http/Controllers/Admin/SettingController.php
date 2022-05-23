<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $settings = Setting::getAll();

        return view('panel.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $options = [
            "phone_1",
            "phone_2",
            "mobile_1",
            "mobile_2",
            "email",
            "project_name",
            "project_description",
            "address",
            "map",
            "copyright",
            "social_media",
            "logo",
        ];

        foreach ($options as $option) {
            if (!$request->{$option}) {
                continue;
            }
            if ($request->hasFile($option)) {
                $request->merge([$option . '_media' => MediaFileService::publicUpload($request->{$option})->files['original']]);
                Setting::set($option, $request->{$option . '_media'});
            } else {
                Setting::set($option, $request->{$option});
            }
        }
        return redirect()->back()->with('success', '  ذخیره تغییرات با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
