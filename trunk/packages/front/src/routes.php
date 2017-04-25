<?php

/**
 * VI
 */
Route::get('/home', [
    'as' => 'vi.trang-chu',
    'uses' => 'Front\Controllers\Front\FrontController@trangchu'
]);
Route::get('/courses', [
    'as' => 'en.categories',
    'uses' => 'Front\Controllers\Front\FrontController@categories'
]);
Route::get('/page', [
    'as' => 'en.layout',
    'uses' => 'Front\Controllers\Front\FrontController@layout'
]);
Route::get('/event', [
    'as' => 'en.news',
    'uses' => 'Front\Controllers\Front\FrontController@news'
]);

Route::get('/contact', [
    'as' => 'en.services',
    'uses' => 'Front\Controllers\Front\FrontController@services'
]);


Route::get('/danh-muc', [
    'as' => 'vi.danh-muc',
    'uses' => 'Front\Controllers\Front\FrontController@danhmuc'
]);
Route::get('/blog', [
    'as' => 'vi.tin-tuc',
    'uses' => 'Front\Controllers\Front\FrontController@tintuc'
]);
Route::get('/giao-dien', [
    'as' => 'vi.giao-dien',
    'uses' => 'Front\Controllers\Front\FrontController@giaodien'
]);
Route::get('/service', [
    'as' => 'vi.dich-vu',
    'uses' => 'Front\Controllers\Front\FrontController@dichvu'
]);



