<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        return view('emails.contact-us');
    }
    public function contactUs(Request $request){
        //send email
        Mail::to(request('email'))
        ->send(new ContactUs([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]));

        return redirect()
        ->back()
        ->with('success','Email Sended');
    }
}
