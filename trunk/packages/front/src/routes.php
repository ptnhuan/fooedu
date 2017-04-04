<?php

/**
*VI
*/

Route::get('/trang-chu', [
            'as' => 'trang_chu',
            'uses' => 'Front\Controllers\FrontController@index'
        ]);
Route::get('/gioi-thieu', [
            'as' => 'gioi_thieu',
            'uses' => 'Front\Controllers\FrontController@gioithieu'
        ]);
Route::get('/tin-tuc', [
            'as' => 'tin_tuc',
            'uses' => 'Front\Controllers\FrontController@tintuc'
        ]);

Route::get('/dich-vu', [
            'as' => 'tin_tuc',
            'uses' => 'Front\Controllers\FrontController@dichvu'
        ]);
Route::get('/gioi-thieu/id{$id}', [
            'as' => 'gioi_thieu',
            'uses' => 'Front\Controllers\FrontController@gioithieu'
        ]);
		
		/**
*VI
*/

Route::get('/trang-chu', [
            'as' => 'trang_chu',
            'uses' => 'Front\Controllers\FrontController@index'
        ]);
Route::get('/gioi-thieu', [
            'as' => 'gioi_thieu',
            'uses' => 'Front\Controllers\FrontController@gioithieu'
        ]);
Route::get('/tin-tuc', [
            'as' => 'tin_tuc',
            'uses' => 'Front\Controllers\FrontController@tintuc'
        ]);

Route::get('/dich-vu', [
            'as' => 'tin_tuc',
            'uses' => 'Front\Controllers\FrontController@dichvu'
        ]);
Route::get('/gioi-thieu/id{$id}', [
            'as' => 'gioi_thieu',
            'uses' => 'Front\Controllers\FrontController@gioithieu'
        ]);

