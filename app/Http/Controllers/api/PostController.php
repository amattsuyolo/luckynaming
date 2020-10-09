<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * 首頁出現的文章
     * @return Response
     */
    public function index():object
    {
        // 首頁內容
        $content = Post::orderBy('updated_at', 'desc')
        ->where('is_published', 1)
        ->where('published_at','<', date('Y-m-d H:i:s'))
        ->where('published_until','>', date('Y-m-d H:i:s'))
        ->take(5)
        ->get();
        return response()->json($content, 200);
    }
    /**
     * 推薦的文章
     * @return Response
     */
    public function recommendPost():object
    {
        $content = Post::orderBy('updated_at', 'desc')
        ->where('is_published', 1)
        ->where('published_at','<', date('Y-m-d H:i:s'))
        ->where('published_until','>', date('Y-m-d H:i:s'))
        ->take(3)
        ->get();
        return response()->json($content, 200);
    }
}
