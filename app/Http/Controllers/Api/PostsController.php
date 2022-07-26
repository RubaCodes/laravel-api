<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();

        // with(['tags', 'category'])

        return response()->json($posts);
    }
}
