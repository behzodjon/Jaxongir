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
    Route::match(['get', 'post'], '/', ['uses' => 'IndexController@show'])->name("index");

    Route::get ('/about', ['uses' => 'AboutController@show'])->name("about");
    Route::get ('/services', ['uses' => 'ServicesController@show'])->name("services");
    Route::get ('/news', ['uses' => 'NewsController@show'])->name('news');
    Route::get('/contact', ['uses' => 'ContactController@show'])->name("contact");
    Route::get('/food',['uses'=>'FoodController@show'])->name("food");
    Route::get("/page/{id}", "IndexController@pageShow");
    Route::get('/dishes',['uses'=>'DishesController@show'])->name("dishes");
    Route::get('/hotels/{id}', 'MainController@hotelView')->name('hotel.view');


});

