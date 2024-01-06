<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if ($request->by === "jenis") {
            $chips = Type::all();
        } else if ($request->by === "merk") {
            $chips = Brand::all();
        } else {
            $chips = Type::all();
        }

        $templateProducts = Product::orderBy('created_at', 'desc');

        if ($request->filter) {
            $products = $templateProducts->filterBySlug($request->filter)->paginate(12)->withQueryString();
        } else if (!$request->filter) {
            $products = $templateProducts->paginate(12)->withQueryString();
        }
        return view("main.product.index", [
            'chips' => $chips,
            'products' => $products,
            'types' => Type::all(),
            'whatsapp' => Contact::where('socmed_id', 1)->first()
        ]);
    }

    public function detail(Product $product)
    {
        return view('main.product.detail', [
            'title' => $product->name . ' - RASCARSUMATERA',
            'product' => $product,
            'relatedProducts' => Product::where('brand_id', $product->brand_id)->where('id', '!=', $product->id)->inRandomOrder()->get(),
            'types' => Type::all(),
            'whatsapp' => Contact::where('socmed_id', 1)->first()
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->query('keyword');
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->take(6)->get();
        return ProductResource::collection($products);
    }

    public function sort(Request $request)
    {
        $slug = $request->query('slug');
        $brand = Brand::where('slug', $slug)->first();
        $products = Product::where('brand_id', $brand->id)->orderBy('id', 'desc')->take(6)->get();
        return ProductResource::collection($products);
    }
}
