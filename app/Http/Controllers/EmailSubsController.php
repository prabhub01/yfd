<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;

class EmailSubsController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'primary_contact' => 'required',
            'secondary_contact' => 'required',
            'subject' => 'required',
            'duration' => 'required',
            'reason' => 'required',

        ]);

        $input = $request->all();
        VolunteerForm::create($input);

        \Mail::to($request->email)->send(new \App\Mail\VolunteerSubmit);
        return redirect()->route('volunteer')
            ->with('flash_success', 'Volunteer Form Submitted Successfully !');
    }
}
