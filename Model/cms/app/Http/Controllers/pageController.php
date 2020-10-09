<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function hello() {
    	return('Selamat Datang');
    }
    public function about() {
    	return('Nama : Evita Putri Nauli <br> Nim : 1931710144');
    }
    public function articles($id) {
    	return('Halaman artikel dengan id ' .$id);
    }
}
