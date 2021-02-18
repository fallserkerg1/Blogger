<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $posts = Post::orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(8);

        return view('blogger.index', compact('posts'));
    }

    public function tag($slug){
        
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })
        ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('blogger.index', compact('posts'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)
            ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('blogger.index', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();

        return view('blogger.post',compact('post'));
    }
    
}
