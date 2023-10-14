<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use App\Models\Message;

class MessageController extends Controller
{
    

public function store(Request $request)
{
    // Validate the request
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => ['required', 'regex:/^[0-9]{10}$/'], // Ensure exactly 10 digits
        'message' => 'required|string|max:1000',
    ]);

    // Create a new Contact record
    $contact = Message::create($validatedData);

    // Optionally, you can redirect or return a response here

    // Redirect to a thank you page or return a success response
    return redirect()->route('thankyou');
}
//
}
