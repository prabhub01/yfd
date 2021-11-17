<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Event;
use App\Models\Team;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = Event::where('is_active', 1)->get();
        return view('frontend.events.event', compact('data'));
    }

    public function latestEvent()
    {
        return view('frontend.events.latestEvent');
    }

    public function pastEvent()
    {
        return view('frontend.events.pastEvent');
    }

    public function comingEvent()
    {
        return view('frontend.events.comingEvent');
    }

    public function view($slug)
    {
        $data = Event::where('slug', $slug)->first();
        return view('frontend.events.event-details',compact('data'));
    }
}
