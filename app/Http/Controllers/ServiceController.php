<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    public function index(){
        return view('services.index', [ "title"=> "Our Services"]);
    }

    public function show($id){
        $service = Service::findOrFail($id);
        return view('services.show', ['service' => $service, "title"=> $service->name]);
    }
}
