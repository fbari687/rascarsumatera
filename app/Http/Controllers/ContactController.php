<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Type;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('main.contact', [
            'types' => Type::all(),
            'contacts' => Contact::orderBy('priority', 'asc')->get(),
            'whatsapp' => Contact::where('socmed_id', 1)->first()
        ]);
    }
}
