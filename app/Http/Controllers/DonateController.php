<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {
        return view('frontend.donate');
    }
}
