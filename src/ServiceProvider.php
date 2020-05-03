<?php


namespace Preetender\Base;

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
    }


    /**
     * @return void
     */
    public function register(): void {}
}
