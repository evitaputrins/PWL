<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    public function message(){
        $messages = Message::all();
        return view('message',['messages' => $messages]);
    }
}