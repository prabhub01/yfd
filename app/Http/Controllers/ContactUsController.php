<?php

namespace App\Http\Controllers;

use App\Models\ContactUsForm;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('frontend.contactUs');
    }


    public function store(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'message' => 'required',

        ]);

        $input = $request->all();
        ContactUsForm::create($input);

        \Mail::to($request->email)->send(new \App\Mail\ContactUsSubmit);
        return redirect()->route('contact-us')
            ->with('flash_success', 'Contact Us Form Submitted Successfully !');
    }
}
