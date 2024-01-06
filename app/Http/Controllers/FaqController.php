<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Type;
use App\Models\Contact;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('main.faq', [
            'faqs' => Faq::all(),
            'types' => Type::all(),
            'whatsapp' => Contact::where('socmed_id', 1)->first()
        ]);
    }
}
