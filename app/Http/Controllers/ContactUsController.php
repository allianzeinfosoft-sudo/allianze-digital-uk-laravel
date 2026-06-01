<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactUsController extends Controller
{
    //
    public function index()
    {
        $data['meta_title'] = 'Contact Us - Allianze Digital UK';
        $data['meta_description'] = 'Get in touch with Allianze Digital UK for any inquiries or support.';
        return view('contact-us', $data);
    }

    

    public function submit(Request $request)
    {
        // ✅ Validate
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:20',
            'message'    => 'required|string',
        ]);

        // ✅ Send HTML Email
        Mail::to(env('MAIL_TO_ADDRESS', 'sdu@allianzetechnologies.com'))
            ->send(new ContactMail($validatedData));

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

}
