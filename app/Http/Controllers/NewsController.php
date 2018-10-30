<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
public function show(){

    $news = News::all();
    return view('site.news',compact('news'));
}
    public function pageShow($id){
        $news = News::findOrFail($id);






    }
}
