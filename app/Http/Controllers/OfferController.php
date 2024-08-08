<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        return view('offers.index', [ "title"=> "Our Offers"]);
    }

    public function show($id){
        $offer = Offer::findOrFail($id);
        return view('offers.show', ['offer' => $offer, "title" => $offer->name]);
    }
}
