<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */


/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/post', [
            'as' => 'admin_post',
            'uses' => 'Post\Controllers\Admin\PostAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/post/edit', [
            'as' => 'admin_post.edit',
            'uses' => 'Foosteel\Post\Controllers\Admin\PostAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/post/edit', [
            'as' => 'admin_post.post',
            'uses' => 'Foosteel\Post\Controllers\Admin\PostAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/post/delete', [
            'as' => 'admin_post.delete',
            'uses' => 'Foosteel\Post\Controllers\Admin\PostAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////

Route::get('post/delete', [
            'as' => 'post.delete',
            'uses' => 'Foosteel\Post\Controllers\Front\PostFrontController@delete'
        ]);

 Route::get('post/edit', [
            'as' => 'post.edit',
            'uses' => 'Foosteel\Post\Controllers\Front\PostFrontController@edit'
        ]);

        /**
         * post
         */
        Route::post('post/edit', [
            'as' => 'post.post',
            'uses' => 'Foosteel\Post\Controllers\Front\PostFrontController@post'
        ]);


        
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
         Route::get('admin/post_category', [
            'as' => 'admin_post_category',
            'uses' => 'Foosteel\Post\Controllers\Admin\PostCategoryAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/post_category/edit', [
            'as' => 'admin_post_category.edit',
            'uses' => 'Foosteel\Post\Controllers\Admin\PostCategoryAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/post_category/edit', [
            'as' => 'admin_post_category.post',
            'uses' => 'Foosteel\Post\Controllers\Admin\PostCategoryAdminController@post'
        ]);
         /**
         * delete
         */
        Route::get('admin/post_category/delete', [
            'as' => 'admin_post_category.delete',
            'uses' => 'Foosteel\Post\Controllers\Admin\PostCategoryAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
    });
});
