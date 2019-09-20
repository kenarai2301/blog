<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Category;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function index(){
        $categories = Category::all();
        $posts = Post::all();
        $posts->load('category','user');
        return view('blog.index',[
            'posts'=>$posts,
            'categories'=>$categories
        ]);
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

    public function category(Category $category) {
        $posts = Post::where('category_id',$category->id)->get();
        
        return view('blog.category',['posts'=>$posts,
        'category'=>$category]);
      }

      public function search(Request $request)
      {
          $keyword = $request->input('keyword');
          $posts = Post::where('title','LIKE',"%$keyword%")->get();
          return view('blog.search',compact('posts','keyword'));
      }
}
