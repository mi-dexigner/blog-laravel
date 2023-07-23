<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        if(Auth::id()){
            $usertype = Auth()->user()->role;

            if($usertype == "user"){
                $posts = Post::all();
                return view('home.homepage',compact('posts'));
            }
            else if($usertype == "admin"){
                return view('admin.adminhome');
            }else{
                return redirect()->back();
            }
        }

    }

    public function post(){
        return view('post');
    }

    public function homepage(){
        $posts = Post::all();
        return view('home.homepage',compact('posts'));
    }

    public function post_details($id){
        $post = Post::find($id);
        return view('home.post_details',compact('post'));
    }
}
