<?php

namespace WebDEV\B2BWave\Providers;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use WebDEV\B2BWave\Services\B2BWaveClient;

/**
 * Class ServiceProvider
 *
 * @package WebDEV\B2BWave
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishes();
        $this->registerRoutes();
        $this->registerViews();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/b2bwave.php', 'b2bwave');
        $this->app->bind(B2BWaveClient::class, function() {
            return new B2BWaveClient();
        });
        $this->app->alias(B2BWaveClient::class, 'B2BWaveClient');
    }

    /**
     * There are several resources that get published
     *
     * Only worry about telling the application about them if running in the console.
     *
     */
    protected function registerPublishes()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

            $this->publishes([
                __DIR__ . '/../../config/b2bwave.php' => config_path('b2bwave.php'),
            ], 'b2bwave-config');

            $this->publishes([
                __DIR__ . '/../../database/migrations' => database_path('migrations'),
            ], 'b2bwave-migrations');
        }
    }
}
