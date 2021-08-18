<?php

namespace App\Providers;

use App\Models\Categories;
use View;
use Illuminate\Support\ServiceProvider;

class CategoriasProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
           $categorias = Categories::all();
           $view->with('categorias', $categorias);
        });
    }
}
