<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.type.index', [
            'title' => 'Jenis',
            'types' => Type::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:types,slug'
        ]);

        $validated['name'] = ucwords(strtolower($validated['name']));
        $type = Type::create($validated);
        return redirect('/admin/dashboard/type')->with([
            'success' => 'Menambahkan Jenis ' . $validated['name']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('dashboard.type.edit', [
            'title' => "Jenis",
            'type' => $type
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $oldName = $request->oldName;
        $rules = [
            'name' => 'required'
        ];

        if ($request->slug != $type->slug) {
            $rules['slug'] = 'required|unique:brands,slug';
        }

        $validated = $request->validate($rules);
        $validated['name'] = ucwords(strtolower($validated['name']));
        $type->update($validated);

        return redirect('/admin/dashboard/type')->with([
            'success' => 'Mengubah Nama Jenis ' . $oldName . ' Menjadi ' . $validated['name']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type = Type::findOrFail($type->id);
        $type->delete();
        return redirect('/admin/dashboard/type')->with([
            'success' => "Menghapus Jenis " . $type->name
        ]);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Type::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
