<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.gallery.index', [
            'title' => 'Galeri',
            'galeries' => Gallery::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gallery.create', [
            'title' => 'Galeri',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'images' => 'required',
            'images.*' => 'image|file',
        ]);

        for ($i = 0; $i < count($validated['images']); $i++) {
            $imagePath = $validated['images'][$i]->store('gallery-image');
            Gallery::create([
                'image' => $imagePath
            ]);
        }

        return redirect('/admin/dashboard/gallery')->with([
            'success' => 'Menambahkan Galeri Baru'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery = Gallery::findOrFail($gallery->id);
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }
        $gallery->delete();
        return redirect('/admin/dashboard/gallery')->with([
            'success' => 'Menghapus Gambar'
        ]);
    }
}
