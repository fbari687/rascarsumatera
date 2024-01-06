<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\ProjectVideo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('main.home', [
            'banner' => Banner::first(),
            'newProducts' => Product::orderBy('created_at', 'desc')->take(5)->get(),
            'brandProducts' => Product::where('brand_id', 1)->take(5)->get(),
            'galleries' => Gallery::all(),
            'types' => Type::all(),
            'brands' => Brand::orderBy('id', 'asc')->get(),
            'articles' => Article::orderBy('id', 'desc')->take(6)->get(),
            'projectvideo' => ProjectVideo::orderBy('id', 'asc')->first(),
            'whatsapp' => Contact::where('socmed_id', '1')->first(),
        ]);
    }
}
