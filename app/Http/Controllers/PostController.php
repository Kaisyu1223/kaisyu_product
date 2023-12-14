<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\SubCategory;

class PostController extends Controller
{
    public function index(Post $post)
    {
         return view('posts/index')->with(['posts' => $post->getPaginateByLimit(5)]);
    }
    
    public function create(SubCategory $Subcategory)
    {
        return view('posts.create')->with(['categories' => $category->get()]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show') -> with(['post' => $post]);
    }
}
