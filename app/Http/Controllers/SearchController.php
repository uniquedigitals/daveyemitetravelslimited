<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Post;
use App\Models\Service;

class SearchController extends Controller
{
    public function index(Request $request){

        $search = $request->input('search');

        $offers = Offer::where("name", "LIKE", "%". $search . "%")
        ->orWhere("excerpt", "LIKE", "%". $search . "%")
        ->orWhere("categories", "LIKE", "%". $search . "%")
        ->orWhere("content", "LIKE", "%". $search . "%")->get();

        $posts = Post::where("name", "LIKE", "%". $search . "%")
        ->orWhere("excerpt", "LIKE", "%". $search . "%")
        ->orWhere("categories", "LIKE", "%". $search . "%")
        ->orWhere("content", "LIKE", "%". $search . "%")->get();

        $services = Service::where("name", "LIKE", "%". $search . "%")
        ->orWhere("excerpt", "LIKE", "%". $search . "%")
        ->orWhere("content", "LIKE", "%". $search . "%")->get();

        $results = $offers->merge($posts)->merge($services);

        return view("search", ["results"=> $results, "search"=> $search, "title" => 'Search result for ' . $search ]);

      }
}
