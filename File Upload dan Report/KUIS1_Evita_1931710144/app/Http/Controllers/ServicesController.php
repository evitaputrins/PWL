<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('Services');
    }
    public function __construct()
    {
         $this->middleware('auth');
    }
}
