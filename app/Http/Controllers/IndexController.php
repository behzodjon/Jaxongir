<?php

namespace App\Http\Controllers;

use App\Food;
use App\News;
use App\Service;
use Illuminate\Http\Request;
use App\Page;

class IndexController extends Controller
{
    public function show(Request $request)
    {
        $pages = Page::all();
        $news = News::all();
        $services = Service::all();
        $food=Food::all();

        return view('site.index', compact('services','pages','food'));
    }

    public function pageShow($id){
        $page = Page::findOrFail($id);
        $services=Service::findOrFail($id);
        $food=Food::findOrFail($id);

        dd($page);


    }
}
