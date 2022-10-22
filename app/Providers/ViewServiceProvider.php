<?php

namespace App\Providers;
use App\Models\Profile;

use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['*'], function ($view) {
            $profileItems = Profile::pluck('name','id')->toArray();
            $view->with('profileItems', $profileItems);
        
        });

        //
    }
}