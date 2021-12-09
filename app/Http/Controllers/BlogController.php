<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Team;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        $data = Blog::where('is_active', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.blog.index', compact('data'));
    }

    public function view($slug)
    {
        $data = Blog::where('slug', $slug)->first();
        $latest = Blog::orderBy('created_at', 'desc')->take(10)->get();
        // dd($latest);
        return view('frontend.blog.blog-details',compact('data','latest'));
    }
}