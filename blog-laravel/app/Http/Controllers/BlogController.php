<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Category;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function index()
    {
        
        $categories = Category::all();
        $posts = Post::latest()->paginate(9);
        $posts->load('category','user');
        return view('blog.index',[
            'posts'=>$posts,
            'categories'=>$categories
        ]);
    }

    public function show (Post $post)
    {
        $post->load('category','user','comments');
        return view('blog.show')->with('post',$post);
    }


    public function commentStore(Request $request,$post)
    {
        $this->validate($request,[
            'comment' => 'required'
        ]);
        //新規コメント投稿
        $comment = new Comment();
        $comment->post_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        
        return redirect()->back();
    }

    public function category(Category $category) 
    {
      //カテゴリーidが同じ物を表示する
        $posts = Post::latest()->where('category_id',$category->id)->paginate(9);
        
        return view('blog.category',['posts'=>$posts,
        'category'=>$category]);
    }

    public function search(Request $request)
    {
      //リクエストされたキーワード（タイトル）に一致したものを表示する
        $keyword = $request->input('keyword');
        $posts = Post::latest()->where('title','LIKE',"%$keyword%")->paginate(9);
        return view('blog.search',compact('posts','keyword'));
    }
}
