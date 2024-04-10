<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function contact(): View
    {
        $contacts = Contact::all();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'

        ]);

        $newStore = Contact::create($data);

        return redirect(route('contacts'))->with('success', 'Mesajul a fost trimis cu succes');
    }
}
