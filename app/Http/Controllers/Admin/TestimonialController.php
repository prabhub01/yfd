<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Testimonial;
use App\Repositories\TeamRepository;
use Illuminate\Http\Request;
use Alert;

class TestimonialController extends Controller
{
    public function index()
    {
        $data = Testimonial::orderBy('display_order', 'asc')
            ->get();
        return view('backend.testimonial.index', compact('data'));
    }

    public function create()
    {
        return view('backend.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'company' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Testimonial::create($input);

        Alert::success('Success', 'Testimonial Created Successfully !');
        return redirect()->route('admin.testimonial.index');
    }

    public function edit($id)
    {
        $details = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit', ['details' => $details]);
    }

    public function update(Request $request, $id)
    {
        $details = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'company' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('image')) {
            unlink("uploads/testimonial/" . $details->image);
            $destinationPath = 'uploads/testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            $input['image'] = $details->image;
        }

        $details->update($input);
        Alert::success('Success', 'Testimonial Updated Successfully !');
        return redirect()->route('admin.testimonial.index');
    }

    public function destroy($id)
    {
        $details = Testimonial::findOrFail($id);
        unlink("uploads/testimonial/" . $details->image);
        $details->delete();

        Alert::success('Success', 'Testimonial Deleted Successfully !');
        return redirect()->route('admin.testimonial.index');
    }

    public function destroyImage($id)
    {
        $details = Team::findOrFail($id);
        unlink("uploads/team/" . $details->photo);

        return redirect()->route('admin.team.index')
            ->with('flash_success', 'Image Deleted Successfully');
    }
}
