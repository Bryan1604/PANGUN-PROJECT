<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request\CommentsRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use DB;
class CommentsController extends Controller
{
    public function store($id,Request $request): RedirectResponse   // neu khong dung -> Post $post  hoac Request $request
    {

        $post = Post::find($id);
       
        $this->validate(  $request,[
            'author'=>'required',
            'text'=>'required'
        ]);
        $comment = new Comment();

        $comment ->post_id  = $post->id;
        $comment ->author   = $request->input('author');
        $comment ->text     = $request->input('text');
        //$post ->user_id=auth()->user()->id;
        $comment->save();
        return back();

        //return redirect('/posts/{{$post->id}/comments')->with('success','Comments created.');
    }

    
}
