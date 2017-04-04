<?php

namespace Front;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Route;
class FrontServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
        $this->publishes([
            __DIR__ . '/config/front_admin.php' => config_path('front_admin.php'),
                ], 'config');

        if (substr(Route::currentRouteName(), 0, 3) == "en.") {
            $this->loadViewsFrom(__DIR__ . '/Views', 'en');
        } else {
            $this->loadViewsFrom(__DIR__ . '/Views', 'vi');
        }


        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
                ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Front\Controllers\Front\FrontController');

        /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'front');
    }

    /**
     *
     */
}
