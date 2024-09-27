<?php

namespace App\Http\Controllers\Front;

use App\Models\category;

class AboutController extends Controller
{

    public function home()
    {
        return view('front.layouts.home');
    }

    public function about()
    {
        return view('front.pages.about');
    }
//
//    public function home()
//    {
//        $categories = category::all();
//
//        return view('front.layouts.home', compact('categories'));
//    }
//
    public function featured()
    {
        return view('front.pages.featured');
    }

    public function blogs()
    {
        return view('front.pages.blogs');
    }

//    public function index()
//    {
//        $categories = Category::all();
//        return view('front.pages.about', compact('categories')); // 'about' view dosyanız
//    }

}
