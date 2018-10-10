<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('index');
});
Route::group(['middleware' => 'web'], function(){
    Route::match(['get', 'post'], '/', ['uses' => 'IndexController@show', 'as' => 'home']);
    Route::get ('/about', ['uses' => 'AboutController@show']);
    Route::get ('/servises', ['uses' => 'ServisesController@show']);
    Route::get ('/news', ['uses' => 'NewsController@show']);
    Route::get('/contact', ['uses' => 'ContactController@show']);
});