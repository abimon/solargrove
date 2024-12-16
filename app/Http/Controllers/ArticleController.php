<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

        if (request()->hasFile('cover')) {
            $extension = request()->file('cover')->getClientOriginalExtension();
            $cover = time() . '.' . $extension;
            $path = request('cover')->storeAs('uploads', $cover);
        }
        Article::create([
            'title' => request('title'),
            'content' => request('content'),
            'author_id' => 1,
            'path' => $path,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $article = Article::findOrFail($id);
        if (request()->hasFile('cover')) {
            $extension = request('cover')->getOriginalExtension();
            $cover = time() . '.' . $extension;
            $path = request('cover')->storeAs('uploads', $cover);
            $article->path = $path;
        }
        if (request('title') != null) {
            $article->title = request('title');
        }
        if (request('content') != null) {
            $article->content = request('content');
        }
        if (request('is_published') != null) {
            $article->is_published = request('is_published');
        }
        $article->update();
        return redirect('/articles')->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
