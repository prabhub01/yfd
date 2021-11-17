<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeakWithUsController extends Controller
{
    public function index(){
        return view('frontend.speakWithUs');
    }
}
