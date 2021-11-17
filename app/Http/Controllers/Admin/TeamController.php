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


class TeamController extends Controller
{
    protected $team;

    public function __construct(TeamRepository $team)
    {
        $this->team = $team;
    }
    public function index()
    {
        $data = Team::orderBy('display_order', 'asc')
            ->get();
        return view('backend.team.index', compact('data'));
    }

    public function create()
    {
        return view('backend.team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'email' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('photo')) {
            $destinationPath = 'uploads/team/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        }

        Team::create($input);

        Alert::success('Success', 'Team Created Successfully !');
        return redirect()->route('admin.team.index')
            ->with('flash_success', 'Team created successfully.');
    }

    public function edit($id)
    {
        $details = Team::findOrFail($id);
        return view('backend.team.edit', ['details' => $details]);
    }

    public function update(Request $request, $id)
    {
        $details = Team::findOrFail($id);

        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required'
        // ]);

        $input = $request->all();
        $input['is_active'] = isset($input['is_active']) ? 1 : 0;

        if ($image = $request->file('photo')) {
            $destinationPath = 'uploads/team/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $details->update($input);

        return redirect()->route('admin.team.index')
            ->with('flash_success', 'Team updated successfully');
    }

    public function destroy($id)
    {
        $details = Team::findOrFail($id);
        $details->delete();

        Alert::success('Success', 'Team Deleted Successfully !');
        return redirect()->route('admin.team.index')
            ->with('flash_success', 'Team deleted successfully');
    }

    public function destroyImage($id)
    {
        $details = Team::findOrFail($id);
        unlink("uploads/team/" . $details->photo);

        return redirect()->route('admin.team.index')
            ->with('flash_success', 'Image Deleted Successfully');
    }
}
