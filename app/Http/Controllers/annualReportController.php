<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutUs;
use App\Models\AgmReport;
use App\Models\Team;
use Illuminate\Http\Request;

class annualReportController extends Controller
{
    public function index()
    {
        $data = AgmReport::get();
        return view('frontend.annual-report', compact('data'));
    }
}