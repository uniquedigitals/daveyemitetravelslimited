<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'nullable|email|max:255',
              'message' => 'required|string|max:1000',
              'post_id' => 'required|exists:posts,id',

          ]);

          $comment = new Comment;
          $comment->name = $validatedData['name'];
          $comment->email = $validatedData['email'];
          $comment->message = $validatedData['message'];
          $comment->post_id = $validatedData['post_id'];
          $comment->user_ip = $_SERVER['HTTP_CLIENT_IP'] ?? ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']);
          $comment->save();

          return redirect()->back()->with('success', 'Comment submitted successfully.');

      }
}
