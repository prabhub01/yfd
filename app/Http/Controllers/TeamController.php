<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use App\Models\Team;
use App\Models\OldTeam;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::where('is_active', 1)
        ->orderBy('display_order', 'asc')
        ->get();

        return view('frontend.team', compact('data'));
    }

     public function founder()
    {
        $data = Founder::where('is_active', 1)
        ->orderBy('display_order', 'asc')
        ->get();

        return view('frontend.founder', compact('data'));
    }

    public function oldTeam()
    {
        $data = OldTeam::where('is_active', 1)
        ->orderBy('display_order', 'asc')
        ->get();
        
        $year = OldTeam::select('tenure_year')
        ->where('is_active', 1)
        ->orderBy('display_order', 'asc')
        ->get();
        
        return view('frontend.oldTeam', compact('data', 'year'));
    }

     public function oldTeamSearch(Request $request)
    {
        $data = OldTeam::where('is_active', 1)
        ->where('tenure_year', $request->year)
        ->orderBy('display_order', 'asc')
        ->get();

        $year = OldTeam::select('tenure_year')
        ->where('is_active', 1)
        ->orderBy('display_order', 'asc')
        ->get();
        
        return view('frontend.oldTeam', compact('data', 'year'));
    }
}