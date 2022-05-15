<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pricing;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\MediaFileService;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings = Pricing::query()->get();
        return view('panel.pricings.index', compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::query()->where('status', Service::ACTIVE_STATUS)->get();
        return view('panel.pricings.create', compact('services'));
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
            'price' => ['required', 'integer'],
            'area' => ['required'],
            'service_id' => ['nullable', 'exists:services,id'],
            'description' => ['required'],
        ]);

        $pricing = Pricing::query()->create([
            'price' => $request->price,
            'area' => $request->area,
            'service_id' => $request->service_id,
            'description' => $request->description,
        ]);

        return redirect()->route('panel.pricings.index')
            ->with('success', 'ایجاد تعرفه با موفقیت انجام شد');
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
        $pricing = Pricing::query()->where('id', $id)->first();
        $services = Service::query()->where('status', Service::ACTIVE_STATUS)->get();
        return view('panel.pricings.edit', compact('pricing', 'services'));
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
        $pricing = Pricing::query()->where('id', $id)->first();

        $request->validate([
            'price' => ['required', 'integer'],
            'area' => ['required'],
            'service_id' => ['nullable', 'exists:services,id'],
            'description' => ['required'],
        ]);

        $pricing->update([
            'price' => $request->price,
            'area' => $request->area,
            'service_id' => $request->service_id,
            'description' => $request->description,
        ]);

        return redirect()->route('panel.pricings.index')
            ->with('success', 'ویرایش تعرفه با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pricing::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف تعرفه با موفقیت انجام شد');
    }
}
