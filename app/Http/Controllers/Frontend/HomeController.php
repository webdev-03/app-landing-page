<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function elements()
    {
        return view('frontend.pages.elements');
    }

    public function feature()
    {
        return view('frontend.pages.feature');
    }

    public function industries()
    {
        return view('frontend.pages.industries');
    }

    public function pricing()
    {
        return view('frontend.pages.pricing');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function singleBlog()
    {
        return view('frontend.pages.single-blog');
    }
}
