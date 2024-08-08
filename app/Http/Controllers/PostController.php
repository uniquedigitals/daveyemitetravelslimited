<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Comment;

class PostController extends Controller
{
    public function index(){
        return view("posts.index", [ "title"=> "Our Blog"]);
    }
    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id);
        return view('posts.show', ["post" => $post,  "title"=> $post->name]);
    }

}
