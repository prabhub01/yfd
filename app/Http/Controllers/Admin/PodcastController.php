<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Alert;
use App\Models\Blog;
use App\Models\Podcast;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Podcast::get();
        return view('backend.podcast.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.podcast.create');
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
            'podcast_link' => 'required'
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        Podcast::create($input);
        alert()->success('Created','Podcast Created Successfully !');

        return redirect()->route('admin.podcast.index');
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
        $details = Podcast::findOrFail($id);
        return view('backend.podcast.edit',compact('details'));
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
        $details = Podcast::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'podcast_link' => 'required'
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        $details->update($input);

        alert()->success('Updated','Podcast Updated Successfully !');
        return redirect()->route('admin.podcast.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = Podcast::findOrFail($id);
        $details->delete();
        alert()->success('Deleted','Podcast Deleted Successfully !');

        return redirect()->route('admin.podcast.index');
    }
}
