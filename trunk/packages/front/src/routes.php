<?php

/**
 * VI
 */
Route::get('/categories', [
    'as' => 'en.categories',
    'uses' => 'Front\Controllers\Front\FrontController@categories'
]);
Route::get('/layout', [
    'as' => 'en.layout',
    'uses' => 'Front\Controllers\Front\FrontController@layout'
]);
Route::get('/news', [
    'as' => 'en.news',
    'uses' => 'Front\Controllers\Front\FrontController@news'
]);

Route::get('/services', [
    'as' => 'en.services',
    'uses' => 'Front\Controllers\Front\FrontController@services'
]);


Route::get('/danh-muc', [
    'as' => 'vi.danh-muc',
    'uses' => 'Front\Controllers\Front\FrontController@danhmuc'
]);
Route::get('/tin-tuc', [
    'as' => 'vi.tin-tuc',
    'uses' => 'Front\Controllers\Front\FrontController@tintuc'
]);
Route::get('/giao-dien', [
    'as' => 'vi.giao-dien',
    'uses' => 'Front\Controllers\Front\FrontController@giaodien'
]);
Route::get('/dich-vu', [
    'as' => 'vi.dich-vu',
    'uses' => 'Front\Controllers\Front\FrontController@dichvu'
]);



