<?php

namespace App\Providers;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Category;
use App\Models\University;

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
            $CategoryItems = Category::pluck('name','id')->toArray();
            $view->with('categoryItems', $CategoryItems);
            $projectItems = Project::with('Profile')->with('Category')->orderBy('id', 'desc')->get();;
            $view->with('ProjectItems', $projectItems);

        });

        //
    }
}