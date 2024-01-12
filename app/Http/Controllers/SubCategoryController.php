<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
    public function index(Subcategory $subcategory)
    {
        return view('posts.index')->with(['posts' => $subcategory->getBySubcategory()]);
    }
}
