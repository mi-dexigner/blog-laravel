<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function post_page(){
        return view('admin.post_page');
    }

    public function add_post(Request $request){
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->role;
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $image = $request->image;
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $post->image = $imagename;
    }
        $post->post_status='published';
        $post->user_id=$user_id;
        $post->name=$name;
        $post->user_type=$usertype;

        $post->save();

        return redirect()->back()->with('message','Post Added Successfully');
        
    }

    public function show_post(){
        $posts = Post::all();
        return view('admin.show_post',compact('posts'));
    }

    public function post_delete($id){

        $post = Post::find($id);
        $post->delete();
        return redirect()->back()->with('message','Post Deleted Successfully');  
    }

    public function post_edit($id){
        $post = Post::find($id);
        return view('admin.edit_page',compact('post'));
    }
    public function update_post(Request $request,$id){
        
        $user = Auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $usertype = $user->role;
        $data = Post::find($id);
        $data->title = $request->title;
        $data->content = $request->content;
        $image = $request->image;
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postimage',$imagename);
        $data->image = $imagename;
    }
        $data->post_status='published';
        $data->user_id=$user_id;
        $data->name=$name;
        $data->user_type=$usertype;

        $data->save();
        return redirect()->back()->with('message','Post Update Successfully');
    }
}
