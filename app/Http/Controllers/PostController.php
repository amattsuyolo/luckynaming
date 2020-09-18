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
        $post = Post::find($id)->toArray();
        if(count($post)==0){
            return back();
        }
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
}