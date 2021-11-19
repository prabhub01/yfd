<?php

namespace App\Http\Controllers;

use App\Models\TestimonialMember;

class JoinUsController extends Controller
{
    public function index()
    {
        $testimonial = TestimonialMember::where('is_active', 1)->get();
        // dd($testimonial);
        return view('frontend.joinUs',compact('testimonial'));
    }
}
