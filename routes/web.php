<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;
//
//Route::get('/', [HomeController::class, 'index']);
Route::get('/home',[\App\Http\Controllers\front\HomeController::class,'home'])->name('front.layouts.home');
Route::get('/about',[\App\Http\Controllers\front\AboutController::class,'about'])->name('front.pages.about');
Route::get('/featured',[\App\Http\Controllers\front\FeaturedController::class,'featured'])->name('front.pages.featured');
Route::get('/blogs',[\App\Http\Controllers\front\BlogsController::class,'blogs'])->name('front.pages.blogs');
Route::get('/', [\App\Http\Controllers\front\HomeController::class,'home'])->name('front.layouts.home');
Route::get('/contact',[\App\Http\Controllers\front\ContactController::class,'contact'])->name('front.pages.contact');

//use App\Http\Controllers\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\FeaturedController;
use App\Http\Controllers\Front\BlogsController;
use App\Http\Controllers\Front\ContactController;

//Route::get('/contact', [ContactController::class, 'index'])->name('front.pages.contact');
//Route::get('/', [HomeController::class, 'index'])->name('front.layouts.home');
//Route::get('/home', [HomeController::class, 'index'])->name('front.layouts.home');
//Route::get('/about', [AboutController::class, 'index'])->name('front.pages.about');
//Route::get('/featured', [FeaturedController::class, 'index'])->name('front.pages.featured');
//Route::get('/blogs', [BlogsController::class, 'index'])->name('front.pages.blogs');
