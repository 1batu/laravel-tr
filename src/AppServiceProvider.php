<?php

namespace Herkod;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // Register any services here if needed
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Publish language files
        $this->publishes([
            __DIR__.'/../resources/lang/' => $this->getLangPath(),
        ], 'herkod-laravel-tr');

        // Load language files
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'herkod-laravel-tr');
    }

    /**
     * Get the language path based on Laravel version
     */
    private function getLangPath()
    {
        // For Laravel 9+ use lang_path() helper
        if (function_exists('lang_path')) {
            return lang_path();
        }

        // For older Laravel versions use resource_path
        return resource_path('lang');
    }
}
