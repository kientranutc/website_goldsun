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

Route::group(['middleware' => 'localization'], function() {
    Route::get('language/{la}', [
        'as' => 'switchLang',
        'uses' => 'Frontend\LangController@index',
    ]);
    Route::get('/', [
        'as' => 'frontend.home',
        'uses' => 'Frontend\HomeController@index'
    ]);
});
Route::get('/dang-nhap',[
   'as' => 'auth.login',
   'uses' => 'Backend\AuthController@login'
]);
Route::post('/dang-nhap',[
    'as' => 'auth.post-login',
    'uses' => 'Backend\AuthController@processLogin'
]);
/**
 * ------------------------------------Backend-------------------------------
 */

Route::group(['middleware' => 'checkLogin'], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [
            'as' => 'dashboard.index',
            'uses' => 'Backend\DashboardController@index'
        ]);
        Route::get('/logout', [
            'as' => 'auth.logout',
            'uses' => 'Backend\AuthController@logout'
        ]);
        Route::prefix('/san-pham')->group(function () {

        });

    });
});

