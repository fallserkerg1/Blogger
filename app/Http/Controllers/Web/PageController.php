<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Category;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog(){
        $posts = Post::orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('web.posts', compact('posts'));
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts = Post::where('category_id', $category)
            ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('web.posts', compact('posts'));
    }

    public function tag($slug){
        
        $posts = Post::whereHas('tags', function($query) use($slug){
            $query->where('slug', $slug);
        })
        ->orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(5);

        return view('web.posts', compact('posts'));
    }

    public function post($slug){
        $post = Post::where('slug', $slug)->first();

        return view('web.post',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
