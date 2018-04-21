<?php

namespace App\Providers;

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
        $this->app['request']->server->set('HTTPS', $this->app->environment() != 'local');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        require_once __DIR__ . '/../Http/helpers.php';
    }
}
