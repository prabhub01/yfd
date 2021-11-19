<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $testimonial = Testimonial::where('is_active', 1)->get();
        $blog = Blog::where('is_active', 1)->latest()->take(3)->get();
        return view('frontend.index', compact(
            'blog', 'testimonial'
        ));
    }
}
