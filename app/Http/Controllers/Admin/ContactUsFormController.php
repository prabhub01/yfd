<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUsForm;
use App\Models\VolunteerForm;
use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ContactUsForm::orderBy('created_at', 'desc')->get();
        return view('backend.contactUsForm.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VolunteerForm  $volunteerForm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = ContactUsForm::findOrFail($id);
        return view('backend.contactUsForm.view',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VolunteerForm  $volunteerForm
     * @return \Illuminate\Http\Response
     */
    public function edit(VolunteerForm $volunteerForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VolunteerForm  $volunteerForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VolunteerForm $volunteerForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VolunteerForm  $volunteerForm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = ContactUsForm::findOrFail($id);
        $details->delete();
        alert()->success('Deleted','Contact Us Data Deleted Successfully !');
        return redirect()->route('admin.contact-us.index');
    }
}
