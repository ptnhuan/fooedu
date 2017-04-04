<?php

namespace Front;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;


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
            __DIR__.'/config/front_admin.php' => config_path('front_admin.php'),
        ],'config');

        $this->loadViewsFrom(__DIR__ . '/views', 'front');

         $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
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
        $this->app->make('Front\Controllers\FrontController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'front');
    }

    /**
     *
     */

}
