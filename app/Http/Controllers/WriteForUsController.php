<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WriteForUsController extends Controller
{
    public function index(){
        return view('frontend.writeForUs');
    }
}
