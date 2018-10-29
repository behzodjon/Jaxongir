<?php

namespace App\Http\Controllers;

use App\Dishes;
use Illuminate\Http\Request;

class DishesController extends Controller
{


    public function show(){
     $dishes=Dishes::all();
     return view('site.dishes',compact('dishes'));
 }
 public function pageShow($id){

     $dishes=Dishes::findOrFail($id);
 }
}
