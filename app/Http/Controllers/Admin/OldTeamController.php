<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OldTeam;
use Illuminate\Http\Request;
use Alert;

class OldTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      
     public function index()
    {
        $data = OldTeam::orderBy('display_order', 'asc')
            ->get();
        return view('backend.oldTeam.index', compact('data'));
    }

    public function create()
    {
        return view('backend.oldTeam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tenure_year' => 'required',
            'full_name' => 'required',
            'designation' => 'required',
            // 'description' => 'required',
            'email' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('photo')) {
            $destinationPath = 'uploads/old-team/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }

        oldTeam::create($input);

        Alert::success('Success', 'Old Team Created Successfully !');
        return redirect()->route('admin.old-team.index')
            ->with('flash_success', 'Old Team created successfully.');
    }

    public function edit($id)
    {
        $details = oldTeam::findOrFail($id);
        return view('backend.oldTeam.edit', ['details' => $details]);
    }

    public function update(Request $request, $id)
    {
        $details = oldTeam::findOrFail($id);

        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required'
        // ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('photo')) {
            $destinationPath = 'uploads/old-team/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $details->update($input);

        return redirect()->route('admin.old-team.index')
            ->with('flash_success', 'Team updated successfully');
    }

    public function destroy($id)
    {
        $details = oldTeam::findOrFail($id);
        $details->delete();

        Alert::success('Success', 'Team Deleted Successfully !');
        return redirect()->route('admin.old-team.index')
            ->with('flash_success', 'Team deleted successfully');
    }

    public function destroyImage($id)
    {
        $details = oldTeam::findOrFail($id);
        unlink("uploads/old-team/" . $details->photo);

        return redirect()->route('admin.old-team.index')
            ->with('flash_success', 'Image Deleted Successfully');
    }
}