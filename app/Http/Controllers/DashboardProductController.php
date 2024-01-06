<?php

namespace App\Http\Controllers;

use App\Models\AdditionalInformation;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.product.index', [
            'products' => Product::orderBy('id', 'asc')->get(),
            'title' => 'produk'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.product.create', [
            'title' => 'produk',
            'brands' => Brand::all(),
            'types' => Type::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'seo' => 'required',
            'slug' => 'required|unique:products,slug',
            'brand_id' => 'required|exists:brands,id',
            'type_id' => 'required|exists:types,id',
            'description' => 'required',
            'image' => 'required|file|image|max:10240'
        ]);

        $additionalValids = $request->validate([
            'keys' => 'required',
            'keys.*' => 'min:1',
            'values' => 'required',
            'values.*' => 'min:1'
        ]);

        $imageValid = $request->validate([
            'images.*' => 'image|file'
        ]);

        $validated['additional_information'] = 1;
        $validated['image'] = $validated['image']->store('product-image');

        $product = Product::create($validated);

        for ($j = 0; $j < count($additionalValids['keys']); $j++) {
            AdditionalInformation::create([
                'key' => $additionalValids['keys'][$j],
                'value' => $additionalValids['values'][$j],
                'product_id' => $product->id
            ]);
        }
        if ($imageValid) {
            for ($i = 0; $i < count($imageValid['images']); $i++) {
                $imagePath = $imageValid['images'][$i]->store('product-image');
                ProductImage::create([
                    'image' => $imagePath,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect('/admin/dashboard/product')->with([
            'success' => 'Menambahkan produk ' . $product->name
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashboard.product.edit', [
            'title' => 'Produk',
            'product' => $product,
            'brands' => Brand::all(),
            'types' => Type::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required',
            'seo' => 'required',
            'brand_id' => 'required|exists:brands,id',
            'type_id' => 'required|exists:types,id',
            'description' => 'required',
            'image' => 'required|file|image|max:10240'
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'unique:products,slug';
        }

        $additionalValids = $request->validate([
            'keys' => 'required',
            'keys.*' => 'min:1',
            'values' => 'required',
            'values.*' => 'min:1'
        ]);

        $imageValid = $request->validate([
            'images.*' => 'image|file'
        ]);


        $validated = $request->validate($rules);


        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('product-image');
        }

        $product->update($validated);

        $idProduct = $product->id;

        $thisAdditionalInformation = AdditionalInformation::where('product_id', $idProduct)->get();
        $thisAdditionalInformationId = [];
        foreach ($thisAdditionalInformation as $thisId) {
            array_push($thisAdditionalInformationId, $thisId->id);
        }
        AdditionalInformation::destroy($thisAdditionalInformationId);

        for ($j = 0; $j < count($additionalValids['keys']); $j++) {
            AdditionalInformation::create([
                'key' => $additionalValids['keys'][$j],
                'value' => $additionalValids['values'][$j],
                'product_id' => $idProduct
            ]);
        }

        $thisOldImages = ProductImage::where('product_id', $idProduct)->get();
        $thisOldImagesId = [];
        foreach ($thisOldImages as $thisImgId) {
            array_push($thisOldImagesId, $thisImgId->id);
        }

        if (!$request->oldImages) {
            if ($request->images) {
                if ($request->oldImagesOri) {
                    foreach ($request->oldImagesOri as $oldImageOri) {
                        Storage::delete($oldImageOri);
                    }
                }
                ProductImage::destroy($thisOldImagesId);
                foreach ($request->images as $image) {
                    $newImagePath = $image->store('product-image');
                    ProductImage::create([
                        'image' => $newImagePath,
                        'product_id' => $idProduct,
                    ]);
                }
            } else {
                if ($request->oldImagesOri) {
                    foreach ($request->oldImagesOri as $oldImageOri) {
                        Storage::delete($oldImageOri);
                    }
                    ProductImage::destroy($thisOldImagesId);
                }
            }
        } else {
            $newOldImage = array_diff($request->oldImagesOri, $request->oldImages);
            $newOldImageArr = array_values($newOldImage);
            foreach ($newOldImageArr as $img) {
                Storage::delete($img);
                $delProduct = ProductImage::where('image', $img)->first();
                $delProduct->delete();
            }
            if ($request->images) {
                foreach ($request->images as $image) {
                    $newImagePath = $image->store('product-image');
                    ProductImage::create([
                        'image' => $newImagePath,
                        'product_id' => $idProduct,
                    ]);
                }
            }
        }

        return redirect('/admin/dashboard/product')->with([
            'success' => 'Berhasil Mengedit Produk Menjadi ' . $validated['name']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $productImages = $product->images;
        foreach ($productImages as $productImage) {
            Storage::delete($productImage->image);
        }
        $product = Product::findOrFail($product->id);
        $product->delete();
        return redirect('/admin/dashboard/product')->with([
            'success' => 'Menghapus Produk ' . $product->name
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
