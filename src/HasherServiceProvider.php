<?php

namespace Mustafah15\Hasher;

use Illuminate\Support\ServiceProvider;

class HasherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Mustafah15\Hasher\HasherController');

    }
}
