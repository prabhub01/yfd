<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Alert;
use App\Models\AgmReport;
use App\Models\Blog;
use App\Models\Podcast;

class AgmReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AgmReport::get();
        return view('backend.agm-report.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.agm-report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'file' => 'required'
        ]);

        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'uploads/agm-report/';
            $profileImage = $request->title . "-" . date('Ymd') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }
        AgmReport::create($input);
        alert()->success('Created', 'AGM Report Uploaded Successfully !');

        return redirect()->route('admin.annual-report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $details = AgmReport::findOrFail($id);
        return view('backend.agm-report.edit', compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $details = AgmReport::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'file' => 'required'
        ]);

        $input = $request->all();

        if ($file = $request->file('file')) {
            if (file_exists('uploads/agm-report/' . $details->file) && !empty($details->file)) {
                unlink("uploads/agm-report/" . $details->file);
            }
            $destinationPath = 'uploads/agm-report/';
            $profileImage = $request->title . "-" . date('Ymd') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['file'] = "$profileImage";
        }

        $details->update($input);

        alert()->success('Updated', 'AGM Report Updated Successfully !');
        return redirect()->route('admin.annual-report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = AgmReport::findOrFail($id);
        if (file_exists('uploads/agm-report/' . $details->file) && !empty($details->file)) {
            unlink("uploads/agm-report/" . $details->file);
        }
        $details->delete();
        alert()->success('Deleted', 'AGM Report Deleted Successfully !');

        return redirect()->route('admin.annual-report.index');
    }
}