<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
         return view('posts/index')->with(['posts' => $post->getPaginateByLimit(5)]);
    }
    
    public  function show(Post $post)
    {
        return view('posts.show')->with(['post'=> $post]);
    }
    
    public function create(SubCategory $subcategory, Category $category)
    {
        return view('posts.create')->with(['subcategories' => $subcategory->get(), 'categories' => $category->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect ('/posts/' . $post->id);
    }
}
