<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

//     public function index()
//     {
//     	$hasil = Article::all();
//         return view('home.homeidx',['cek'=>$hasil]);
//     }
 public function __invoke()
 {
 	Cache::remember('article', 15, function(){
 		return Article::all();
 	});
 	$article = Cache::get('article');
 	$article = json_decode(json_encode($article));
 	return view ('home.homeidx')->with(compact('article'));
 	}
 }
