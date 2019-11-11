<?php

namespace Mohamed\Todolist;

use Illuminate\Support\ServiceProvider;

class TodolistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // loading routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // registering views
        $this->loadViewsFrom(__DIR__.'/views', 'todolist');

        // loading migrations
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Mohamed\Todolist\TaskController');
    }
}
