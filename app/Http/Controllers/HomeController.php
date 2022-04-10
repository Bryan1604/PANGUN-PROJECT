<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;                 // neu khong dung thi xoa models

class HomeController extends Controller
{
    /**
     * create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function indext(){
         $user_id= auth()->user()->id;
         $user = User::find($user_id);
         return view('home')->with('posts',$user->posts);
     }
}
