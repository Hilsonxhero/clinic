<?php

namespace App\Http\Controllers\Admin;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::query()->get();
        return view('panel.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.members.create');
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
            'name' => ['required', 'min:4', 'string'],
            'email' => ['required', 'email', 'unique:members,email'],
            'age' => ['nullable'],
            'direction' => ['required'],
            'profile' => ['nullable', 'file'],
            'description' => ['required'],
        ]);

        if ($request->file('profile')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('profile'))->id]);

        $member = Member::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'description' => $request->description,
            'direction' => $request->direction,
            'media_id' => $request->media_id,
        ]);

        return redirect()->route('panel.members.index')
            ->with('success', 'ایجاد عضو کادر درمان با موفقیت انجام شد');
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
        $member = Member::query()->where('id', $id)->first();
        return view('panel.members.edit', compact('member'));
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
        $member = Member::query()->where('id', $id)->first();

        $request->validate([
            'name' => ['required', 'min:4', 'string'],
            'email' => ['required', 'email', Rule::unique('members')->ignore($member->id)],
            'age' => ['nullable'],
            'direction' => ['required'],
            'profile' => ['nullable', 'file'],
            'description' => ['required'],
        ]);


        if ($request->file('profile')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('profile'))->id]);
            if ($member->media) $member->media()->delete();
        } else {

            $request->merge(['media_id' => $member->media_id]);
        }

        $member->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'description' => $request->description,
            'direction' => $request->direction,
            'media_id' => $request->media_id,
        ]);

        return redirect()->route('panel.members.index')
            ->with('success', 'ویرایش عضو کادر درمان با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Member::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف عضو کادر درمان با موفقیت انجام شد');
    }
}
