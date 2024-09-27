<?php

namespace App\Http\Controllers\Front;

use App\Models\category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('front.layouts.home');
    }

    public function home()
    {
        return view('front.layouts.home');
    }

    public function featured()
    {
        return view('front.pages.featured');
    }

    public function blogs()
    {
        return view('front.pages.blogs');
    }

    public function about()
    {
        return view('front.pages.about');
    }
//
//    public function category()
//    {
//        // Kategorileri veritabanından çek
//        $categories = category::all();
//
//        // View'a gönder
//        return view('front.layouts.home', compact('categories'));
//    }
//
//    public function contact()
//    {
//        return view('front.pages.contact');
//    }

//    public function index()
//    {
//        $categories = Category::all();
//        return view('front.layouts.home', compact('categories'));
//    }

}
