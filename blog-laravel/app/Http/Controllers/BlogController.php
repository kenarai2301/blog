<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function index(){
        $posts = Post::all();
        $posts->load('category','user');
        return view('blog.index')->with('posts',$posts);
    }
    public function show (Post $post){
        $post->load('category','user','comments');
        return view('blog.show')->with('post',$post);
    }
    public function commentStore(Request $request,$post)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);
        $comment = new Comment();
        $comment->post_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        
        return redirect()->back();
    }
}
