<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index(){
        return view('applications.index', ['title' => 'Application Form']);
    }
    public function store(Request $request){
        // Validate the incoming request data

        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'surname' => 'required|string | max:500',
            'visa_choice' => 'required|string',
            'sex' => 'required|string',
            'dob' => 'required|date|before_or_equal:yesterday',
            'marital_status' => 'nullable|string',
            'nationality' => 'required|string',
            'state' => 'nullable|string',
            'phone' => 'required|string|max:12',
            'email' => 'required|email',
            'special_request' => 'nullable|string',

        ]);


        $application = new Application();
        $application->first_name = $validatedData['first_name'];
        $application->surname = $validatedData['surname'];
        $application->visa_choice = $validatedData['visa_choice'];
        $application->sex = $validatedData['sex'];
        $application->dob = $validatedData['dob'];
        $application->marital_status = $validatedData['marital_status'];
        $application->nationality = $validatedData['nationality'];
        $application->state = $validatedData['state'];
        $application->phone = $validatedData['phone'];
        $application->email = $validatedData['email'];
        $application->special_request = $validatedData['special_request'];
        $application->user_ip = $_SERVER['HTTP_CLIENT_IP'] ?? ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']);


        $application->save();

        $user_id = $application->id;

        // Redirect or return a response
        return view('applications.show', ['applications' => $validatedData, 'user_id' => $user_id, 'title' => 'Download Form' ]);
        }

}
