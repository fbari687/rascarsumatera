<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.article.index', [
            'title' => "Artikel",
            'articles' => Article::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.article.create', [
            'title' => 'Artikel'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'seo' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image|file'
        ]);

        $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 200);
        $validated['tanggal'] = Carbon::today()->format('Y-m-d');
        $validated['user_id'] = auth()->user()->id;
        $validated['image'] = $request->file('image')->store('article-image');

        Article::create($validated);

        return redirect('/admin/dashboard/article')->with([
            'success' => 'Membuat Artikel ' . $validated['title']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $articleDate = $article->tanggal;
        $articleTanggal = Carbon::parse($articleDate)->translatedFormat('F d, Y');
        return view('dashboard.article.show', [
            'article' => $article,
            'articleDate' => $articleTanggal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('dashboard.article.edit', [
            'title' => 'Artikel',
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $rules = [
            'title' => 'required|max:255',
            'seo' => 'required',
            'body' => 'required',
            'image' => 'image|file',
        ];

        if ($request->input('slug') != $article->slug) {
            $rules['slug'] = 'required|unique:articles,slug';
        }
        $validated = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('article-image');
        }

        $validated['excerpt'] = Str::limit(strip_tags($validated['body']), 200);
        $validated['tanggal'] = Carbon::today()->format('Y-m-d');
        $validated['user_id'] = auth()->user()->id;
        $article->update($validated);

        return redirect('/admin/dashboard/article')->with([
            'success' => 'Mengubah Artikel ' . $validated['title']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article = Article::findOrFail($article->id);
        if ($article->image) {
            Storage::delete($article->image);
        }
        $article->delete();
        return redirect('/admin/dashboard/article')->with([
            'success' => 'Menghapus Artikel ' . $article->title
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Article::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
