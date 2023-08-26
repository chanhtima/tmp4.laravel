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

Route::group(['middleware' => 'auth:admin', 'setAdminAccessControl'], function () {
    Route::prefix('admin/banner')->group(function () {
        Route::get('/index', 'BannerAdminController@index')->name('admin.banner.banner.index');
        Route::get('/datatable_ajax', 'BannerAdminController@datatable_ajax')->name('admin.banner.banner.datatable_ajax');

        Route::get('/add', 'BannerAdminController@form_banner')->name('admin.banner.banner.add');
        Route::get('/edit/{category_id}', 'BannerAdminController@form_banner')->name('admin.banner.banner.edit');
        Route::post('/save', 'BannerAdminController@save_banner')->name('admin.banner.banner.save');

        Route::post('/set_status', 'BannerAdminController@set_status')->name('admin.banner.banner.set_status');
        Route::post('/set_delete', 'BannerAdminController@set_delete')->name('admin.banner.banner.set_delete');

        Route::post('/set_re_order', 'BannerAdminController@set_re_order')->name('admin.banner.banner.set_re_order');
        Route::post('/delete_image', 'BannerAdminController@delete_image')->name('admin.banner.banner.delete_image');
    });
});

// ============================================================ category ============================================================ //
Route::prefix('admin/banner/category')->group(function () {
    Route::get('/', 'BannerCategoriesAdminController@index')->name('admin.banner.category.index');
    Route::get('/datatable_ajax', 'BannerCategoriesAdminController@datatable_ajax')->name('admin.banner.category.datatable_ajax');

    Route::get('/add', 'BannerCategoriesAdminController@form')->name('admin.banner.category.add');
    Route::get('/edit/{category_id}', 'BannerCategoriesAdminController@form')->name('admin.banner.category.edit');
    Route::post('/save', 'BannerCategoriesAdminController@save')->name('admin.banner.category.save');

    Route::post('/sort', 'BannerCategoriesAdminController@sort')->name('admin.banner.category.sort');
    Route::post('/set_move_node', 'BannerCategoriesAdminController@set_move_node')->name('admin.banner.category.set_move_node');
    
    Route::post('/set_status', 'BannerCategoriesAdminController@set_status')->name('admin.banner.category.set_status');
    Route::post('/set_delete', 'BannerCategoriesAdminController@set_delete')->name('admin.banner.category.set_delete');

    Route::post('/get_category', 'BannerCategoriesAdminController@get_category')->name('admin.banner.category.get_category');
});
