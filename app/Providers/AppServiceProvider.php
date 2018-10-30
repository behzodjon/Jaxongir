<?php

namespace App\Providers;

use App\Page;
use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //its just a dummy data object.
//         menu will be here

        // Sharing is caring
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer("*", function (){
            $pages = Page::all();
            View::share('page', $pages);
        });
    }
}
