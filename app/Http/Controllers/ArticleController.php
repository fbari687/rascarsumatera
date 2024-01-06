<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Type;
use App\Models\Article;
use App\Models\Contact;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('main.article.index', [
            'articles' => Article::orderBy('id', 'desc')->paginate(10),
            'types' => Type::all(),
            'whatsapp' => Contact::where('socmed_id', 1)->first()
        ]);
    }

    public function detail(Article $article)
    {
        $articleDate = $article->tanggal;
        $articleTanggal = Carbon::parse($articleDate)->translatedFormat('F d, Y');
        return view('main.article.detail', [
            'title' => $article->title . ' - RASCARSUMATERA',
            'types' => Type::all(),
            'article' => $article,
            'whatsapp' => Contact::where('socmed_id', 1)->first(),
            'articleDate' => $articleTanggal,
            'articles' => Article::orderBy('id', 'desc')->where('id', '!=', $article->id)->take(3)->get()
        ]);
    }
}
