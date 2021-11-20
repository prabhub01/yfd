<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Podcast;
use App\Models\Team;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        $data = Podcast::where('is_active', 1)->get();
        return view('frontend.podcast', compact('data'));
    }
}
