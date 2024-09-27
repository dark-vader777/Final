<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;

class CategoryController
{
    public  function  index()
    {
        $categories = category::all();
        return view('admin.pages.category.category',compact('categories'));
    }
}
