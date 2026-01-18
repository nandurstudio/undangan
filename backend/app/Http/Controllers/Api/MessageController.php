<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'emailHelp' => 'required|email|max:255', // Changed to match form field
            'subject' => 'nullable|string|max:255',
            'comments' => 'required|string', // Changed to match form field
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->emailHelp,
            'subject' => $request->subject,
            'message' => $request->comments,
        ];

        $message = Message::create($data);

        return response()->json(['status' => 'Success', 'msg' => 'Message sent successfully'])
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
            ->header('Access-Control-Allow-Headers', 'Content-Type, X-Auth-Token, Origin');
    }
}
