<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewRegistration;

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

        if(config('app.enable_smtp')){
            //Send email on new registration
            Mail::send(new NewRegistration($validatedData));
        }


        Session::flash('success', 'Thank you for contacting us. Your message has been successfully submitted. Our team will review it and get back to you shortly.');

        return redirect()->route('contact');
    }
}
