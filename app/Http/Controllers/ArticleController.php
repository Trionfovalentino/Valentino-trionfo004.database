<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {$request->validate([
        'title' => 'required',
        'content' => 'required',
    ]);

    Auth::user()->articles()->create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'content' => $request->content,
        'image' => $request->image,
    ]);

    return redirect()->route('articles.index')->with('success', 'Articolo creato con successo!');  }

    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article->update($request->all());

        return redirect()->route('article.index')->with('success', 'Articolo aggiornato!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('article.index')->with('success', 'Articolo eliminato!');
    }
}