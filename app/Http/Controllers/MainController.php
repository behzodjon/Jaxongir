<?php

namespace App\Http\Controllers;

use App\Hotels;
use App\Monuments;
use App\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function hotelView($id)
    {
        $hotels = Hotels::findOrFail($id);
        $random = Hotels::inRandomOrder()->limit(3)->get();
        return view('site.hotels_view', compact('hotels','random'));

    }
    public function show(){

        $monuments=Monuments::all();
        return view('site.monuments',compact('monuments'));
    }

    public function monumentView($id){
        $monuments = Monuments::findOrFail($id);
        $random=Monuments::inRandomOrder()->limit(3)->get();

        return view('site.monuments_view',compact('monuments','random'));
    }
    public function newsView($id){
        $news=News::findOrFail($id);
        $random=News::inRandomorder()->limit(3)->get();
        return view('site.news_view',compact('news','random'));
    }
}
