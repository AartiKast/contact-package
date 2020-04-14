<?php

namespace Laravel\ToDoList;

use Illuminate\Support\ServiceProvider;

class ToDoListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Laravel\ToDoList\ToDoListController'); 
        $this->mergeConfigFrom(__DIR__.'/config/todolist.php','todolist');       
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views','list');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([__DIR__.'/config/todolist.php' => config_path('todolist.php')],'todolist-config');
    }
}
