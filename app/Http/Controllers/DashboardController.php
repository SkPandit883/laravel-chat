<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;
class DashboardController extends Controller
{
    public function dashboard()
    {
        $messages=Message::where(['from_user'=>Auth::user()->id,'to_user'=>1])->orWhere(["from_user"=>2,"to_user"=>Auth::user()->id])->get();
        return view('dashboard',compact('messages'));
    }
}
