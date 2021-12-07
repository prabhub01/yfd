<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutUs;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = AboutUs::first();
        return view('frontend.aboutUs',compact('data'));
    }
}