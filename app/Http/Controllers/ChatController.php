<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Events\ChatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        Message::create([
            'to_user' => $request->to_user,
            'from_user' => $request->from_user,
            'message' => $request->message,
            // 'file' => $request->file,
        ]);
        return event(new ChatEvent($request->message, $request->to_user, $request->from_user));
    }
}
