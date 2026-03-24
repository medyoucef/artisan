<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
class MessageController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create([
            'nom' => $validated['name'],
            'email' => $validated['email'],
            'sujet' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        return redirect()->back()->with('success', 'Message envoyé avec succès !');
    }

}
