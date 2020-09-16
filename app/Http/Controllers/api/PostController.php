<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        // 首頁內容
        $content = Post::orderBy('updated_at', 'desc')
        ->take(5)
        ->get();
        return response()->json($content, 200);
    }
}
