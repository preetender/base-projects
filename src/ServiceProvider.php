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

        // publish
        $this->publish();
    }

    /**
     * Register routes;
     */
    private function loadRoutes()
    {
        Route::prefix('base')
            ->namespace('Preetender\\Base\\Unit\\Http\\Controllers')
            ->group(__DIR__ . '/../routes/web.php');
    }

    /**
     * php artisan vendor:publish --tag=config
     */
    private function publish()
    {
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views/vendor/base')
        ], 'view');

        $this->publishes([
            __DIR__ . '/../migrations' => database_path('migrations')
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../config/base.php' => config_path('base')
        ], 'config');
    }
}
