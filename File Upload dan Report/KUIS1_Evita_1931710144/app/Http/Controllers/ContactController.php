<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class ContactController extends Controller
{
    public function index(){
        return view('Contact');
    }
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function send(Request $request){
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect('/contact');
    }
}
