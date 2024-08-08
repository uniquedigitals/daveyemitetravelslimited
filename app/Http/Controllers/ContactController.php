<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
              'name' => 'required|string|max:255',
              'email' => 'nullable|email|max:255',
              "phone" => ["required", "string", "regex:/^\+?[0-9\s\-\(\)]{7,20}$/"],
              'categories' => 'nullable|string',
              'message' => 'required|string|max:1000'


          ]);

          $contact = new Contact;
          $contact->name = $validatedData['name'];
          $contact->email = $validatedData['email'];
          $contact->phone = $validatedData['phone'];
          $contact->categories = $validatedData['categories'];
          $contact->message = $validatedData['message'];
          $contact->user_ip = $_SERVER['HTTP_CLIENT_IP'] ?? ($_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR']);
          $contact->save();

          return redirect()->back()->with('success', 'Message sent successfully.');

      }
}
