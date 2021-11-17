<?php

namespace App\Http\Controllers;

use App\Models\Team;
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
}
