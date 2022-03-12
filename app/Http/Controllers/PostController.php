<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function indext()
    {
        $post = Post::all();
        return view('posts.indext',compact('posts'));
    }

    public function create(){
        return view('post.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required'
        ]);
        Post::create($request->all());
        return redirect()->route('post.indext');
    }

    public function show($id){
        $post =Post::find($id);
        return view('post.show', compact('post'));
    }
}
