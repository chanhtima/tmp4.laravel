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
// Route::get('/getContactSubject', 'ContactUsController@getContactSubject')->name('contactus.contactus.getContactSubject') ;

Route::group(['middleware' => 'auth:admin', 'setAdminAccessControl'], function () {
    Route::prefix('admin/contactus')->group(function () {
        Route::get('/', 'ContactUsAdminController@index')->name('admin.contactus.contact.index');
        Route::get('/datatable_ajax', 'ContactUsAdminController@datatable_ajax')->name('admin.contactus.contact.datatable_ajax');
        Route::get('/edit/{category_id}', 'ContactUsAdminController@form')->name('admin.contactus.contact.edit');

        Route::post('/save', 'ContactUsAdminController@save')->name('admin.contactus.contact.save');

        Route::post('/set_status', 'ContactUsAdminController@set_status')->name('admin.contactus.contact.set_status');
        Route::post('/set_delete', 'ContactUsAdminController@set_delete')->name('admin.contactus.contact.set_delete');

        Route::prefix('page')->group(function () {
            Route::get('/edit', 'ContactPageAdminController@form')->name('admin.contactus.page.edit');
            Route::post('/save', 'ContactPageAdminController@save')->name('admin.contactus.page.save');
        });
    });
});
