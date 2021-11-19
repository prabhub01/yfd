<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Testimonial;
use App\Repositories\TeamRepository;
use Illuminate\Http\Request;
use Alert;
use App\Models\TestimonialMember;

class TestimonialMemberController extends Controller
{
    public function index()
    {
        $data = TestimonialMember::orderBy('display_order', 'asc')
            ->get();
        return view('backend.testimonial-member.index', compact('data'));
    }

    public function create()
    {
        return view('backend.testimonial-member.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('image')) {
            $destinationPath = 'uploads/member-testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        TestimonialMember::create($input);

        Alert::success('Success', 'Testimonial Created Successfully !');
        return redirect()->route('admin.member-testimonial.index');
    }

    public function edit($id)
    {
        $details = TestimonialMember::findOrFail($id);
        return view('backend.testimonial-member.edit', ['details' => $details]);
    }

    public function update(Request $request, $id)
    {
        $details = TestimonialMember::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('image')) {
            if (isset($details->image)) {
                unlink("uploads/member-testimonial/" . $details->image);
            }
            $destinationPath = 'uploads/member-testimonial/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            $input['image'] = $details->image;
        }

        $details->update($input);
        Alert::success('Success', 'Testimonial Updated Successfully !');
        return redirect()->route('admin.member-testimonial.index');
    }

    public function destroy($id)
    {
        $details = TestimonialMember::findOrFail($id);
        unlink("uploads/member-testimonial/" . $details->image);
        $details->delete();

        Alert::success('Success', 'Testimonial Deleted Successfully !');
        return redirect()->route('admin.member-testimonial.index');
    }

    public function destroyImage($id)
    {
        $details = TestimonialMember::findOrFail($id);
        unlink("uploads/member-testimonial/" . $details->image);

        Alert::success('Success', 'Testimonial Image Deleted Successfully !');
        return redirect()->route('admin.member-testimonial.index');
    }
}
