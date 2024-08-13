<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'postnom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Envoyer l'e-mail
        Mail::to('admin@example.com')->send(new ContactFormMail($validatedData));



        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
