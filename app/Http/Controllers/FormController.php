<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Contact;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
            'subject' => 'required|string',
        ]);

        // Store validated data in the database
        Contact::create($validatedData);

        Session::flash('success', 'Your message submitted successfully!');

        return view('contact');
    }
}
