<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class GuesController extends Controller
{
    public function login()
    {
        return view('partials.login');
    }
    public function register()
    {
        return view('partials.register');
    }

    public function contactUs()
    {
        return view('contactus');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'terms' => 'accepted'
        ]);

        $contact = new Contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->subject = $validatedData['subject'];
        $contact->message = $validatedData['message'];
        if($validatedData['terms'] == 'on'){
            $contact->terms = true;
        } else {
            $contact->terms = false;
        }
        $contact->save();

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
