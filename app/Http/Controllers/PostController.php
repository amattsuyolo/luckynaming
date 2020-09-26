<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * @param Integer $id 
     * @return string|null
     */
    public function postContent($id)
    {
        // 文章內容
        $post = Post::find($id);
        if(!$post){
            return back();
        }
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
        ]);
    }
     /**
     * 文章主頁
     */
    public function show(){
        $posts = Post::orderBy('updated_at', 'desc')
          ->paginate(8);
        return view("nameformal.post",[
            "posts" => $posts,
        ]);
    }

}
