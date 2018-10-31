<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodControlller extends Controller
{
    public function show(){
        $food=Food::all();
        return view('site.food',compact('foood'));
    }
    public function pageShow($id){

        $food=Food::findOrFail($id);
    }
}
