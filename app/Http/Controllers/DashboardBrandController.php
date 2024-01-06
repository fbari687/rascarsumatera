<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.brand.index', [
            'title' => "Merk",
            'brands' => Brand::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:brands,slug'
        ]);

        $validated['name'] = ucwords(strtolower($validated['name']));
        $brand = Brand::create($validated);
        return redirect('/admin/dashboard/brand')->with([
            'success' => 'Menambahkan Merk ' . $validated['name']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('dashboard.brand.edit', [
            'title' => "Merk",
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $oldName = $request->oldName;
        $rules = [
            'name' => 'required'
        ];

        if ($request->slug != $brand->slug) {
            $rules['slug'] = 'required|unique:brands,slug';
        }

        $validated = $request->validate($rules);
        $validated['name'] = ucwords(strtolower($validated['name']));
        $brand->update($validated);

        return redirect('/admin/dashboard/brand')->with([
            'success' => 'Mengubah Nama Merk ' . $oldName . ' Menjadi ' . $validated['name']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand = Brand::findOrFail($brand->id);
        $brand->delete();
        return redirect('/admin/dashboard/brand')->with([
            'success' => "Menghapus Merk " . $brand->name
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Brand::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
