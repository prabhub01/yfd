<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AboutUs::first();
        return view('backend.about-us.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.about-us.create');
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
            'our_story_desc' => 'required',
            'our_story_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'our_mission_desc' => 'required',
            'our_mission_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'our_vision_desc' => 'required',
            'our_vision_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'our_objectives_desc' => 'required',
            'our_objectives_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statement_of_non_descrimination' => 'required',
            'disclaimer' => 'required',
        ]);

        $input = $request->all();


        if ($image = $request->file('banner')) {
            $destinationPath = 'uploads/about-us/banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner'] = "$profileImage";
        }
        if ($image = $request->file('our_story_img')) {
            $destinationPath = 'uploads/about-us/our-story/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_story_img'] = "$profileImage";
        }
        if ($image = $request->file('our_mission_img')) {
            $destinationPath = 'uploads/about-us/our-mission/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_mission_img'] = "$profileImage";
        }
        if ($image = $request->file('our_vision_img')) {
            $destinationPath = 'uploads/about-us/our-vision/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_vision_img'] = "$profileImage";
        }
        if ($image = $request->file('our_objectives_img')) {
            $destinationPath = 'uploads/about-us/our-objectives/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_objectives_img'] = "$profileImage";
        }

        AboutUs::create($input);

        return redirect()->route('admin.about-us.index')
            ->with('flash_success', 'About Us Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $aboutUs, $id = 1)
    {
        $details = AboutUs::findOrFail($id);

        $request->validate([
            'description' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'our_story_desc' => 'required',
            'our_story_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'our_mission_desc' => 'required',
            'our_mission_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'our_vision_desc' => 'required',
            'our_vision_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'our_objectives_desc' => 'required',
            'our_objectives_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'statement_of_non_descrimination' => 'required',
            'disclaimer' => 'required',
        ]);

        $input = $request->all();
        // dd($input);
        if ($image = $request->file('banner')) {
            // unlink("uploads/about-us/banner/".$details->banner);
            $destinationPath = 'uploads/about-us/banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner'] = "$profileImage";
        }
        if ($image = $request->file('our_story_img')) {
            // unlink("uploads/about-us/our-story/".$details->our_story_img);
            $destinationPath = 'uploads/about-us/our-story/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_story_img'] = "$profileImage";
        }
        if ($image = $request->file('our_mission_img')) {
            // unlink("uploads/about-us/our-mission/".$details->our_mission_img);
            $destinationPath = 'uploads/about-us/our-mission/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_mission_img'] = "$profileImage";
        }
        if ($image = $request->file('our_vision_img')) {
            // unlink("uploads/about-us/our-vision/".$details->our_vision_img);
            $destinationPath = 'uploads/about-us/our-vision/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_vision_img'] = "$profileImage";
        }
        if ($image = $request->file('our_objectives_img')) {
            // unlink("uploads/about-us/our-objectives/".$details->our_objectives_img);
            $destinationPath = 'uploads/about-us/our-objectives/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['our_objectives_img'] = "$profileImage";
        }

        $details->update($input);

        return redirect()->route('admin.about-us.index')
            ->with('flash_success', 'About Us Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
