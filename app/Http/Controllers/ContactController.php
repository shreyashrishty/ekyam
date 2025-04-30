<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    // Displays the form
    public function contact()
    {
        return view('contact');
    }

    // Handles submission
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($data);

        return back()->with('success','Thank you! We will be in touch.');
    }
}