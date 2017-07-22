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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function()
    {
        Route::get('/', function () {
            return view('home');
        });

        Route::get('/mylog', function () {
            return view('login');
        });
    });




Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes

    Route::get('/admin', function () {
        return view('adminlte::home');
    });


    /* ===================== HEADER SLIDER ===================== */

    Route::get('headerSlider', 'Admin\AdminController@headerSlider')->name('headerSlider');
    Route::post('create_slide', 'Admin\AdminController@create_slide')->name('create_slide');
    Route::post('updateSlider/{sld?}', 'Admin\AdminController@updateSlider')->name('updateSlider');
    Route::post('deleteSlider', 'Admin\AdminController@deleteSlider')->name('deleteSlider');


});
