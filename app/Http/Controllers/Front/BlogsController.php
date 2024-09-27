<?php

namespace App\Http\Controllers\Front;

class BlogsController extends Controller
{
//    public function blogs()
//    {
//        return view('front.pages.blogs');
//    }
    public function blogs()
    {
        return view('front.pages.blogs');
    }

    public function about()
    {
        return view('front.pages.about');
    }
//
    public function home()
    {
        return view('front.layouts.home');
    }
//
    public function featured()
    {
        return view('front.pages.featured');
    }

    public function index()
    {
        return view('blogs');
    }

}
