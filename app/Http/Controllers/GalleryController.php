<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'attachment' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        $path = $request->file('attachment')->store('form-attachments', 'public');

        Gallery::create([
            'attachment' => $path,
            // Other fields...
        ]);

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }
}
