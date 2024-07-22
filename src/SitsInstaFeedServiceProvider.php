<?php

namespace SitsInstaFeed;

use Illuminate\Support\ServiceProvider;

class SitsInstaFeedServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__.'/../config/sits-insta-feed.php' => config_path('sits-insta-feed.php'),
        ]);

        // Load routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sits-insta-feed');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Merge config
        $this->mergeConfigFrom(
            __DIR__.'/../config/sits-insta-feed.php', 'sits-insta-feed'
        );
    }
}
