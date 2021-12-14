<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Alert;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::get();
        return view('backend.event.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.create');
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
            'description' => 'required',
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;


        if ($image = $request->file('banner')) {
            $destinationPath = 'uploads/events/banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner'] = "$profileImage";
        }
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/events/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Event::create($input);
        alert()->success('Created', 'Event Created Successfully !');

        return redirect()->route('admin.event.index')
            ->with('success', 'Event Created Successfully.');
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
        $details = Event::findOrFail($id);
        return view('backend.event.edit', compact('details'));
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
        $details = Event::findOrFail($id);
        // dd($details);

        $request->validate([
            'description' => 'required',
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('banner')) {
            if (file_exists('uploads/events/banner/' . $details->banner) && !empty($details->banner)) {
                unlink("uploads/events/banner/" . $details->banner);
            }
            $destinationPath = 'uploads/events/banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner'] = "$profileImage";
        }
        if ($image = $request->file('image')) {
            if (file_exists('uploads/events/image/' . $details->image) && !empty($details->image)) {
                unlink("uploads/events/image/" . $details->image);
            }
            $destinationPath = 'uploads/events/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $details->update($input);

        return redirect()->route('admin.event.index')
            ->with('flash_success', 'Event Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = Event::findOrFail($id);
        $details->delete();
        if (file_exists('uploads/events/image/' . $details->image) && !empty($details->image)) {
            unlink("uploads/events/image/" . $details->image);
        }
        if (file_exists('uploads/events/banner/' . $details->banner) && !empty($details->banner)) {
            unlink("uploads/events/banner/" . $details->banner);
        }

        alert()->success('Deleted', 'Event Deleted Successfully !');

        // toast('Events Deleted Successfully!','success');
        return redirect()->route('admin.event.index')
            ->with('success', 'Event deleted successfully');
    }

    public function destroyBanner($id)
    {
        $details = Event::findOrFail($id);
        unlink("uploads/events/banner/" . $details->banner);

        return redirect()->route('admin.event.index')
            ->with('flash_success', 'Banner Image Deleted Successfully');
    }

    public function destroyImage($id)
    {
        $details = Event::findOrFail($id);
        unlink("uploads/events/image/" . $details->image);

        return redirect()->route('admin.event.index')
            ->with('flash_success', 'Image Deleted Successfully');
    }
}