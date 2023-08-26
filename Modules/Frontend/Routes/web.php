<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('')->group(function() {
    Route::get('/', 'FrontendController@index');
    Route::get('/about', 'FrontendController@about');
    Route::get('/newsevent', 'FrontendController@newsevent');
    Route::get('/products', 'FrontendController@products');
    Route::get('/contactus', 'FrontendController@contactus');
    Route::get('/productDetails', 'FrontendController@productDetails');
    Route::get('/blogDetails', 'FrontendController@blogDetails');
    Route::get('/productGroups', 'FrontendController@productGroups');
});
