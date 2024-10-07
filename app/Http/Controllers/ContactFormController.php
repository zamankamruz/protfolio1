<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function send(Request $request)
    {
        // Validate form input
       $mula= $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);


        // Prepare the form data
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send the email
        Mail::to('zamankamruz465@gmail.com')->send(new ContactFormMail($details));

        // Return with a success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
