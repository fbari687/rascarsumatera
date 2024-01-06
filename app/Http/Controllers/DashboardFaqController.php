<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class DashboardFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.faq.index', [
            'title' => "FAQ",
            'faqs' => Faq::all()
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
            'question' => 'required',
            'answer' => 'required'
        ]);

        Faq::create($validated);
        return redirect('/admin/dashboard/faq')->with([
            'success' => 'Menambah FAQ Baru'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('dashboard.faq.edit', [
            'title' => 'FAQ',
            'faq' => $faq
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq->update($validated);
        return redirect('/admin/dashboard/faq')->with([
            'success' => "Mengubah FAQ"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq = Faq::findOrFail($faq->id);
        $faq->delete();
        return redirect('/admin/dashboard/faq')->with([
            'success' => "Menghapus FAQ " . $faq->question
        ]);
    }
}
