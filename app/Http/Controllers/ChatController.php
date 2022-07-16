<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Events\ChatEvent;
use Illuminate\Support\Str;
use App\Library\FileHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MessageRequest;

class ChatController extends Controller
{
    public function sendMessage(MessageRequest $request)
    {
        // return $request;
        try {
            $data = [
                'to_user' => $request->to_user,
                'from_user' => $request->from_user,
                'message' => $request->message, 
            ];
            $file = "";
            if ($request->has('file')) {
                $file = FileHandler::uploadFile('/uploaded', $request->file);
                $data['file'] = $file;
            }
            event(new ChatEvent($request->message, $request->to_user, $request->from_user, $file));
            return response()->json(['status' => "success", "data" => Message::create($data)], 201);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()], 400);
        }
    }
}
