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
        $this->publishes([__DIR__.'/views/list.blade.php' => base_path('resources/views/vendor/contact-package')],'views');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->publishes([
          __DIR__ . '/migrations/2020_03_24_130412_create_demo_users_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '2020_03_24_130412_create_demo_users_table.php'),
        ], 'migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([__DIR__.'/src/config/todolist.php' => config_path('todolist.php')],'todolist-config');
    }
}
