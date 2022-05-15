<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::query()->get();
        return view('panel.questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();
        return view('panel.questions.create', compact('categories'));
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
            'question' => ['required'],
            'answer' => ['required'],
            'category_id' => ['nullable', 'exists:categories,id'],
        ]);

        $pricing = Question::query()->create([
            'question' => $request->question,
            'answer' => $request->answer,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('panel.questions.index')
            ->with('success', 'ایجاد سوال با موفقیت انجام شد');
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
        $question = Question::query()->where('id', $id)->first();
        $categories = Category::query()->where('status', Category::PUBLISHED_STATUS)->get();
        return view('panel.questions.edit', compact('question', 'categories'));
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
        $pricing = Question::query()->where('id', $id)->first();

        $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
            'category_id' => ['nullable', 'exists:categories,id'],
        ]);

        $pricing->update([
            'question' => $request->question,
            'answer' => $request->answer,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('panel.questions.index')
            ->with('success', 'ویرایش سوال با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Question::where('id', $id)->first();
        $item->delete();
        if ($item->media) $item->media->delete();

        return redirect()->back()->with('success', 'حذف سوال با موفقیت انجام شد');
    }
}
