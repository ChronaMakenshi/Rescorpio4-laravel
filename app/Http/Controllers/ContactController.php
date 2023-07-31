<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
    public function __construct()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = new Contact;

        return view('welcome', [
            'contact' => $contact,
        ]);
    }

    public function contact(ContactRequest $request)
    {

        $contact = Contact::create($request->validated());
        $validate = Mail::send(new ContactMail($request->validated()));
        if($validate){
        return back()->with('success', 'Your contact request has been sent');
        }
    }

}
