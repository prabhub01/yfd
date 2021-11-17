<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Team;
use Illuminate\Http\Request;

class PartnerWithUsController extends Controller
{
    public function index()
    {
        return view('frontend.partnerWithUs');
    }
}
