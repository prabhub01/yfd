<?php

namespace App\Http\Controllers;

use App\Models\ContactUsDetail;
use App\Models\ContactUsForm;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = ContactUsDetail::first();
        return view('frontend.contactUs', compact('data'));
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