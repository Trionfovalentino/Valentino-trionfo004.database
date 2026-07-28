<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $articles = [
        1 => [
            'id' => 1,
            'title' => 'Primo Articolo su Laravel',
            'description' => 'Un\'introduzione alla struttura del framework.',
            'content' => 'Contenuto dettagliato del primo articolo. Laravel rende lo sviluppo web veloce ed elegante.'
        ],
        2 => [
            'id' => 2,
            'title' => 'Componenti Anonimi in Blade',
            'description' => 'Come organizzare al meglio le viste del tuo blog.',
            'content' => 'I componenti anonimi ti permettono di definire blocchi riutilizzabili senza creare classi PHP dedicate.'
        ],
        3 => [
            'id' => 3,
            'title' => 'Iniziare con Vite e Bootstrap',
            'description' => 'Guida all\'integrazione dei CSS e JS nel tuo progetto.',
            'content' => 'Vite sostituisce Laravel Mix offrendo una compilazione ultra-veloce dei file frontend.'
        ],
    ];

    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('articles.index', ['articles' => $this->articles]);
    }

    public function show($id)
    {
        if (!isset($this->articles[$id])) {
            abort(404);
        }

        return view('articles.show', ['article' => $this->articles[$id]]);
    }
}