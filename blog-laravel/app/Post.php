<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fllable = [
        'user_id','category_id', 'content', 'title','image'
    ];
    public function category(){
        // 投稿はひとつのカテゴリーに属する
        return $this->belongsTo(Category::class);
    }
    public function user(){
        // 投稿はひとつのuserに属する
        return $this->belongsTo(User::class);
    }
    public function comments(){
        //投稿はたくさんのコメントをもつ
        return $this->hasMany(Comment::class);
    }
}
