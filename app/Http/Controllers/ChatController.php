<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        return  event(new ChatEvent($request->message));
    }
    public function testApi()
    {
        return  event(new ChatEvent('this is test message'));
        return response()->json(['data' => 'this is test message'], 200);
    }
}
