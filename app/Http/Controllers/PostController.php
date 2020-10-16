<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * @param Integer $id 
     * @return \Illuminate\View\View
     */
    public function postContent($id)
    {
        // 文章內容
        $post = Post::with('tags')->where('id',$id)->first();
        if(!$post){
            return back();
        }
        $tags_array = $post->tags->pluck('name')->all();
        $tags = implode(",",$tags_array);
        $post = $post->toArray();
        $title =  $post["title"];
        $sub_title =  $post["subtitle"];
        $content =  $post["body"];
        $published_at =  $post["published_at"];
       
        return view("nameformal.post_content",[
            "title" => $title,
            "sub_title" => $sub_title,
            "content" => $content,
            "published_at" => $published_at,
            "tags" => $tags
        ]);
    }
     /**
     * 文章主頁
     * ＠return \Illuminate\View\View
     */
    public function show(){
        $posts = Post::orderBy('updated_at', 'desc')
            ->where('is_published', 1)
            ->where('published_at','<', date('Y-m-d H:i:s'))
            ->where('published_until','>', date('Y-m-d H:i:s'))
            ->paginate(8);
        return view("nameformal.post",[
            "posts" => $posts,
        ]);
    }

}
