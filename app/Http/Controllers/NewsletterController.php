<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
              'email' => 'required|email|max:255'

          ]);

          $newsletter = new Newsletter;
          $newsletter->email = $validatedData['email'];
          $newsletter->user_ip = $_SERVER['HTTP_CLIENT_IP'] ?? ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']);
          $newsletter->save();

          return redirect()->back()->with('success', 'Your subscription was successful');

      }
}
