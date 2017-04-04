<?php

/**
 * VI
 */
Route::get('/categories', [
    'as' => 'en.categories',
    'uses' => 'Front\Controllers\FrontController@categories'
]);
Route::get('/layout', [
    'as' => 'en.layout',
    'uses' => 'Front\Controllers\FrontController@layout'
]);
Route::get('/news', [
    'as' => 'en.news',
    'uses' => 'Front\Controllers\FrontController@news'
]);

Route::get('/services', [
    'as' => 'en.services',
    'uses' => 'Front\Controllers\FrontController@services'
]);


Route::get('/danh-muc', [
    'as' => 'vi.danh-muc',
    'uses' => 'Front\Controllers\FrontController@danhmuc'
]);
Route::get('/tin-tuc', [
    'as' => 'vi.tin-tuc',
    'uses' => 'Front\Controllers\FrontController@tintuc'
]);
Route::get('/giao-dien', [
    'as' => 'vi.giao-dien',
    'uses' => 'Front\Controllers\FrontController@giaodien'
]);
Route::get('/dich-vu', [
    'as' => 'vi.dich-vu',
    'uses' => 'Front\Controllers\FrontController@dichvu'
]);



