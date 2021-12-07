<?php

namespace App\Http\Controllers\Admin;

use App\Helper\MediaHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use App\Models\About;
use App\Models\Team;
use App\Repositories\TeamRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Models\Founder;

class FounderController extends Controller
{
    public function index()
    {
        $data = Founder::orderBy('display_order', 'asc')
            ->get();
            // dd($data);
        return view('backend.founder.index', compact('data'));
    }

    public function create()
    {
        return view('backend.founder.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'designation' => 'required',
            // 'description' => 'required',
            'email' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('photo')) {
            $destinationPath = 'uploads/founder/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }

        Founder::create($input);

        Alert::success('Success', 'Founder Created Successfully !');
        return redirect()->route('admin.founder.index')
            ->with('flash_success', 'Founder created successfully.');
    }

    public function edit($id)
    {
        $details = Founder::findOrFail($id);
        return view('backend.founder.edit', ['details' => $details]);
    }

    public function update(Request $request, $id)
    {
        $details = Founder::findOrFail($id);

        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required'
        // ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('photo')) {
            $destinationPath = 'uploads/founder/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $details->update($input);

        return redirect()->route('admin.founder.index')
            ->with('flash_success', 'Founder updated successfully');
    }

    public function destroy($id)
    {
        $details = Founder::findOrFail($id);
        $details->delete();

        Alert::success('Success', 'Founder Deleted Successfully !');
        return redirect()->route('admin.founder.index')
            ->with('flash_success', 'Founder deleted successfully');
    }

    public function destroyImage($id)
    {
        $details = Founder::findOrFail($id);
        unlink("uploads/founder/" . $details->photo);

        return redirect()->route('admin.founder.index')
            ->with('flash_success', 'Image Deleted Successfully');
    }
}