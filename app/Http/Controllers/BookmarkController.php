<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

use DB;
class BookmarkController extends Controller
{
    public function store($id,Request $request)  //: RedirectResponse   // neu khong dung -> Post $post  hoac Request $request
    {

        $post = Post::find($id);  
        $this->validate(  $request,[
            'link'=>'required'       
        ]);
        $bookmark = new Bookmark();
        $bookmark ->post_id  = $post->id;
        $bookmark ->link   = $request->url('link');
        //$post ->user_id=auth()->user()->id;
        $bookmark->save();        
        return $bookmark;
       // return back();

        //return redirect('/posts/{{$post->id}/comments')->with('success','Comments created.');
    }
    public function show($id)
    {
        $bookmark= Post::find($id);
        //return view('posts.show')->with('post',$post);
        return view('bookmark',[
            'post'=> $bookmark,
            'comments'=> $bookmark->comments()->get()

        ]);

    }
}
