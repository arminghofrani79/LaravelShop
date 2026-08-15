<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin/article/index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $articles = Article::all();
        return view('admin/article/create', compact('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:6|max:30',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|min:10|max:200'
        ]);
        $filename = time() . '-' . $request->image->getClientOriginalName();
        $request->image->storeAs('images/articles', $filename, 'public');
        Article::create([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $filename,
            'content' => $request->content
        ]);
        return redirect()->route('adminarticles');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Article $article)
    {
        return view('admin/article/edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|min:6|max:30',
            'status' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required|min:10|max:200'
        ]);
        $filename = $article->image;
        if ($request->hasFile('image')) {
            $filename = time() . '-' . $request->image->getClientOriginalName();

            $request->image->storeAs(
                'images/articles',
                $filename,
                'public'
            );
        }
        $article->update([
            'title' => $request->title,
            'status' => $request->status,
            'image' => $filename,
            'content' => $request->content
        ]);
        return redirect()->route('adminarticles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('adminarticles');
    }
}
