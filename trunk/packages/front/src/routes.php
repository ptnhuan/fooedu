<?php

/**
 * VI
 */
Route::get('/', [
    'as' => 'vi.trang-chu',
    'uses' => 'Front\Controllers\Front\FrontController@trangchu'
]);
Route::get('/home', [
    'as' => 'vi.trang-chu',
    'uses' => 'Front\Controllers\Front\FrontController@trangchu'
]);
Route::get('/courses', [
    'as' => 'vi.categories',
    'uses' => 'Front\Controllers\Front\FrontController@courses'
]);
Route::get('/page', [
    'as' => 'vi.layout',
    'uses' => 'Front\Controllers\Front\FrontController@page'
]);
Route::get('/event', [
    'as' => 'vi.event',
    'uses' => 'Front\Controllers\Front\FrontController@event'
]);

Route::get('/contact', [
    'as' => 'vi.contact',
    'uses' => 'Front\Controllers\Front\FrontController@contact'
]);


Route::get('/danh-muc', [
    'as' => 'vi.danh-muc',
    'uses' => 'Front\Controllers\Front\FrontController@danhmuc'
]);
Route::get('/blog', [
    'as' => 'vi.tin-tuc',
    'uses' => 'Front\Controllers\Front\FrontController@tintuc'
]);

Route::get('/service', [
    'as' => 'vi.dich-vu',
    'uses' => 'Front\Controllers\Front\FrontController@dichvu'
]);



