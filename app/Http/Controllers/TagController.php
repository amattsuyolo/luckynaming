<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class TagController extends Controller
{
    public function index($id)
    {
        $posts =  Tag::find($id)
            ->posts()
            ->orderBy('updated_at', 'desc')
            ->where('is_published', 1)
            ->where('published_at','<', date('Y-m-d H:i:s'))
            ->where('published_until','>', date('Y-m-d H:i:s'))
            ->paginate(8);
        $name = Tag::find($id)->name;
        return view("nameformal.tag_post",[
            "posts" => $posts,
            "name" => $name
        ]);   
    }
}
