<?php

namespace Heavykenny\LaravelPackage;

use Illuminate\Support\ServiceProvider;

class LaravelPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-package');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-package');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('laravel-package.php'),
            ], 'config');

            // Publishing the views.
            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-package'),
            ], 'views');

            // Registering package commands.
            $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'laravel-package');
    }
}
