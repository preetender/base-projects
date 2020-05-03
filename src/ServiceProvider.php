<?php


namespace Preetender\Base;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        // register config file
        $this->mergeConfigFrom(__DIR__ . '/../config/base.php', 'base');

        // register migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        // load routes
        $this->loadRoutes();

        // load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'base');
    }


    /**
     * @return void
     */
    public function register(): void {}

    /**
     * Register routes;
     */
    private function loadRoutes()
    {
        Route::prefix('base')
            ->namespace('Preetender\\Base\\Unit\\Http\\Controllers')
            ->group(__DIR__ . '/../routes/web.php');
    }
}
