<?php

namespace Contact;

use Illuminate\Support\ServiceProvider;
use LaravelAcl\Authentication\Classes\Menu\SentryMenuFactory;
use URL,
    Route;
use Illuminate\Http\Request;

class ContactServiceProvider extends ServiceProvider {

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
            __DIR__ . '/config/contact_admin.php' => config_path('contact_admin.php'),
                ], 'config');

        $this->publishes([
            __DIR__ . '/public' => public_path('contact'),
                ], 'public');

        $this->loadViewsFrom(__DIR__ . '/views', 'contact');


        /**
         * Translations
         */
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'contact');


        /**
         * Load view composer
         */
        $this->contactViewComposer($request);

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
        $this->app->make('Contact\Controllers\Admin\ContactAdminController');
        $this->app->make('Contact\Controllers\Front\ContactFrontController');

        /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'contact');
    }


   

    /**
     *
     */
    public function contactViewComposer(Request $request) {

        view()->composer('contact::contact*', function ($view) {
            global $request;
            $contact_id = $request->get('id');
            $is_action = empty($contact_id) ? 'page_add_contact' : 'page_edit_contact';

            $view->with('sidebar_items', [
                /**
                 * Contacts
                 */
                //list
                trans('contact::contact.sidebar_list_contact') => [
                    'url' => URL::route('admin_contact'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                //add
                trans('contact::contact.' . $is_action) => [
                    'url' => URL::route('admin_contact.edit'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
                /**
                 * Categories
                 */
                //list
                trans('contact::contact.sidebar_category_contact') => [
                    'url' => URL::route('admin_contact_category'),
                    "icon" => '<i class="fa fa-users"></i>'
                ],
            ]);
            //
        });

        
    }

}
