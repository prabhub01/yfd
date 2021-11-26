<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Alert;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::get();
        return view('backend.blog.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
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
            'writer' => 'required',

            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;


        if ($image = $request->file('banner')) {
            $destinationPath = 'uploads/blogs/banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner'] = "$profileImage";
        }
        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/blogs/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        // dd($input);
        Blog::create($input);
        alert()->success('Created','Blog Created Successfully !');

        return redirect()->route('admin.blog.index');
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
        $details = Blog::findOrFail($id);
        return view('backend.blog.edit',compact('details'));
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
        $details = Blog::findOrFail($id);

        $request->validate([
            'description' => 'required',
            'title' => 'required',
            'date' => 'required',
            'writer' => 'required',

            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('banner')) {
            if (file_exists('uploads/blogs/banner/' . $details->banner) && !empty($details->banner)){
                unlink("uploads/blogs/banner/".$details->banner);
            }
            $destinationPath = 'uploads/blogs/banner/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['banner'] = "$profileImage";
        }
        if ($image = $request->file('image')) {
            if (file_exists('uploads/blogs/image/' . $details->image) && !empty($details->image)){
                unlink("uploads/blogs/image/".$details->image);
            }
            $destinationPath = 'uploads/blogs/image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $details->update($input);

        alert()->success('Updated','Blog Updated Successfully !');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details = Blog::findOrFail($id);
        $details->delete();
        if (file_exists('uploads/blogs/image/' . $details->image) && !empty($details->image)){
            unlink("uploads/blogs/image/".$details->image);
        }
        if (file_exists('uploads/blogs/banner/' . $details->banner) && !empty($details->banner)){
            unlink("uploads/blogs/banner/".$details->banner);
        }

        alert()->success('Deleted','Blog Deleted Successfully !');

        // toast('Events Deleted Successfully!','success');
        return redirect()->route('admin.blog.index');
    }

    public function destroyBanner($id)
    {
        $details = Blog::findOrFail($id);
        unlink("uploads/blogs/banner/".$details->banner);

        alert()->success('Deleted','Banner Deleted Successfully !');

        return redirect()->route('admin.blog.index');
    }

    public function destroyImage($id)
    {
        $details = Blog::findOrFail($id);
        unlink("uploads/blogs/image/".$details->image);

        alert()->success('Deleted','Image Deleted Successfully !');

        return redirect()->route('admin.blog.index');
    }
}
