<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Services\MediaFileService;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::query()->get();
        return view('panel.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel.users.create');
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
            'username' => ['required', 'min:4', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => ['nullable', 'unique:users,phone'],
            'is_superuser' => ['required', 'boolean'],
            'profile' => ['nullable', 'file'],
        ]);

        if ($request->file('profile')) $request->merge(['media_id' => MediaFileService::publicUpload($request->file('profile'))->id]);

        $user = User::query()->create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_superuser' => $request->is_superuser,
            'media_id' => $request->media_id,
        ]);

        return redirect()->route('panel.users.index')
            ->with('success', 'ایجاد کاربر با موفقیت انجام شد');
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
        $user = User::query()->where('id', $id)->first();
        return view('panel.users.edit', compact('user'));
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
        $user = User::query()->where('id', $id)->first();

        $request->validate([
            'username' => ['required', 'min:4', 'string'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'phone' => ['nullable', Rule::unique('users')->ignore($user->id)],
            'is_superuser' => ['required', 'boolean'],
            'profile' => ['nullable', 'file'],
        ]);


        if ($request->file('profile')) {
            $request->merge(['media_id' => MediaFileService::publicUpload($request->file('profile'))->id]);
            if ($user->media) $user->media()->delete();
        } else {

            $request->merge(['media_id' => $user->media_id]);
        }


        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'is_superuser' => $request->is_superuser,
            'media_id' => $request->media_id,
        ]);

        return redirect()->route('panel.users.index')
            ->with('success', 'ویرایش کاربر با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف کاربر با موفقیت انجام شد');
    }
}
