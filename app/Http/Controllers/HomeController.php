<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view('index', ['title' => 'Home']);
   }

   public function about(){
    return view('about', ['title' => 'About Us']);
   }

   public function contact(){
    return view('contact', ['title' => 'Contact Us']);
   }

   public function gallery(){
    return view('gallery', ['title' => 'Our Media Gallery']);
   }

   public function faqs(){
    return view('faqs', ['title' => 'FAQs']);
   }

   public function teams(){
    return view('teams', ['title' => 'Our Management Team']);
   }

   public function reviews(){
    return view('reviews', ['title' => 'Reviews']);
   }
}

