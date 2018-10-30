<?php

namespace App\Http\Controllers;

use App\Hotels;
use App\Service;
use Illuminate\Http\Request;

/**
 * @property  stars
 */
class ServicesController extends Controller
{
    public $stars;

    public function show(){

        $services=Service::all();
        $hotels=Hotels::all();

        return view('site.services',compact('services','hotels'));
    }
    public function pageShow($id){
        $hotels=Hotels::findOrFail($id);
    }

}
