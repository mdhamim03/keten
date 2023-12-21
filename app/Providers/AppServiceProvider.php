<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        //view for category Layout
        view()->composer('layouts/frontendLayout',function($view){
            return $view->with('categories', Category::with('SubCategory')->latest()->get());
        });
        //view for category Controller layout
        view()->composer('layouts/frontendCategoryLayout',function($view){
            return $view->with('categories', Category::with(['SubCategory','user'])->latest()->get());
        });
    }
}
