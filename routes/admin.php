<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


//Route::get('/admin', [AdminController::class, 'admin'])->name('admin.admin');

Route::get('/admin', [App\Http\Controllers\admin\CategoryController::class, 'index'])->name('category');
