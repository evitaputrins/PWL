<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
	public function about(){
		return view('about');
	}
}

    // public function about() {
    // 	return('Nama : Evita Putri Nauli <br> Nim : 1931710144');
    // }

