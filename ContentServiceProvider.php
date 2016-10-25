<?php

namespace LaravelContent\Contents;

use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       $this->loadViewsFrom(__DIR__.'/view', 'Contents');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';

        //$this->app->make('LaravelContent\Contents\src\ContentController');
          
        $this->app->bind('LaravelContent', function ($app) {
            return $app->make('LaravelContent\Contents\ContentController');
        });
        //die('<<<<<<'); 
    }
}
