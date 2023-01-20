<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
        // $category = Category::find(2);
        // $name = $category->name;

        // return $name;
    }
}
