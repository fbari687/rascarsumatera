<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Socmed;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.contact.index', [
            'title' => 'Kontak',
            'socmeds' => Socmed::all(),
            'contacts' => Contact::all()
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
            'socmed_id' => 'required|exists:socmeds,id',
            'content' => 'required',
            'link' => 'required'
        ]);

        Contact::create($validated);
        return redirect('/admin/dashboard/contact')->with([
            'success' => 'Menambahkan kontak ' . $validated['content']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('dashboard.contact.edit', [
            'title' => 'Kontak',
            'contact' => $contact,
            'socmeds' => Socmed::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'socmed_id' => 'required|exists:socmeds,id',
            'content' => 'required',
            'link' => 'required'
        ]);

        $contact->update($validated);

        return redirect('/admin/dashboard/contact')->with([
            'success' => 'Mengubah Kontak ' . $validated['content']
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact = Contact::findOrFail($contact->id);
        $contact->delete();
        return redirect('/admin/dashboard/contact')->with([
            'success' => 'Menghapus Kontak ' . $contact->content
        ]);
    }
}
