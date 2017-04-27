<?php

namespace Admin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Route;
class AdminServiceProvider extends ServiceProvider {

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
            __DIR__ . '/config/admin_admin.php' => config_path('admin_admin.php'),
                ], 'config');

        if (substr(Route::currentRouteName(), 0, 3) == "en.") {
            $this->loadViewsFrom(__DIR__ . '/Views', 'en');
        } else {
            $this->loadViewsFrom(__DIR__ . '/Views', 'vi');
        }

        $this->publishes([
            __DIR__ . '/public' => public_path('admin'),
                ], 'public');
        
       
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
        $this->app->make('Admin\Controllers\Admin\EduAdminController');

        /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'admin');
    }

    /**
     *
     */
}
