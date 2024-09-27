<?php

namespace App\Http\Controllers\Front;

use App\Models\category;

class FeaturedController extends Controller
{
    public function blogs()
    {
        return view('front.pages.blogs');
    }
//
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

//    public function index()
//    {
//        $categories = Category::all();
//        return view('front.pages.featured', compact('categories')); // 'about' view dosyanız
//    }

}
