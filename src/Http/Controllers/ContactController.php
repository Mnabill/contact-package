<?php

namespace MN\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MN\Contact\Mail\ContactMailable;
use MN\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');   //the first contact name of package the second the blade name 
    }

    public function send(Request $request)
    {

        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect()->route('contact');
    }
}
