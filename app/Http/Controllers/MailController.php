<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'telp' => 'required|min:8',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $details = [
            'title' => $validated['name'] . ' Mengirim pesan pada anda',
            'name' => $validated['name'],
            'telp' => $validated['telp'],
            'email' => $validated['email'],
            'message' => $validated['message']
        ];

        Mail::to('dedi@rascarsumatera.co.id')->send(new MyTestMail($details));
        return redirect('/contact')->with([
            'success' => 'Berhasil'
        ]);
    }
}
