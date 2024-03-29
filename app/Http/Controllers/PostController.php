<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use App\Models\Image;

class PostController extends Controller
{
    public function index(Post $post, Request $request)
    {
        // $post = Post::query();
        $posts = $post->getPaginateByLimit(5);
        $keyword = $request->input('keyword'); 
        if(!empty($keyword)){
            $posts = Post::where('liquer', 'LIKE', "%{$keyword}%")->with('subcategory')->orderBy('updated_at', 'DESC')->paginate(5);
            // $posts = $posts->getPaginateByLimit(5);
        }
        // dd($posts);
        return view('posts.index')->with(['posts' => $posts]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post'=> $post]);
    }
    
    public function create(SubCategory $subcategory, Category $category)
    {
        return view('posts.create')->with(['subcategories' => $subcategory->get(), 'categories' => $category->get()]);
    }
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $input += ['user_id' => Auth::id()];
        $post->fill($input)->save();
        
        // $files = $request->file('images[]');
        $files = $request['images'];
        if (!is_null($files)) {
            foreach($files as $file){
                $image = new Image();
                $image_url = Cloudinary::upload($file->getRealPath())->getSecurePath();
                $input_image = ['image_url' => $image_url, 'post_id' => $post->id];
                $image->fill($input_image)->save();
            }
        }
        return redirect ('/posts/' . $post->id);
    }
    
        public function edit(Post $post, Category $category, Subcategory $subcategory)
    {
        return view('posts.edit')->with(['post' => $post, 'categories' => $category->get(), 'subcategories' => $subcategory->get()]);
    }
    
        public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
