<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\JoinUssController;
use App\Models\JoinUs;
use App\Models\TestimonialMember;

class JoinUsController extends Controller
{
    public function index()
    {
        $formlink = JoinUs::first();
        $testimonial = TestimonialMember::where('is_active', 1)->get();
        // dd($testimonial);
        return view('frontend.joinUs', compact('formlink', 'testimonial'));
    }
}