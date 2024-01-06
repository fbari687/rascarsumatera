<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Contact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('main.about', [
            'types' => Type::all(),
            'whatsapp' => Contact::where('socmed_id', 1)->first()
        ]);
    }
}
