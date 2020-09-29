<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function article($id) {
    	$hasil = Article::find($id);
    	return view('post.post', ['hasil'=>$hasil]);
    }
}
