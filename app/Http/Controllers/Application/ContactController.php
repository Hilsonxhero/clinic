<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'content' => ['required'],
        ]);

        Contact::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return redirect()->back()->with('success', 'پیام شما با موفقیت به  کادر فنی ارسال شد');
    }
}
