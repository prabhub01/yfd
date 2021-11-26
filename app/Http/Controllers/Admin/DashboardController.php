<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Alert;
use App\Models\Blog;
use App\Models\Podcast;
use App\Models\Team;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::get()->count();
        $team = Team::get()->count();
        $podcast = Podcast::get()->count();
        $event = Event::get()->count();

        return view('backend.dashboard',compact('blog','team','podcast','event'));
    }
}
