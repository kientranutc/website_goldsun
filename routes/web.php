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
        //san pham
        Route::prefix('/san-pham')->group(function () {
            Route::get('/', [
                'as' => 'product.index',
                'uses' => 'Backend\ProductController@index'
            ]);
            Route::get('/them-moi', [
                'as' => 'product.add',
                'uses' => 'Backend\ProductController@add'
            ]);
            Route::post('/them-moi', [
                'as' => 'product.post-add',
                'uses' => 'Backend\ProductController@processAdd'
            ]);
        });
        //danh muc
        Route::prefix('/danh-muc')->group(function () {
            Route::get('/', [
                'as' => 'category.index',
                'uses' => 'Backend\CategoryController@index'
            ]);
            Route::get('/add', [
                'as' => 'category.add',
                'uses' => 'Backend\CategoryController@add'
            ]);
            Route::get('/delete/{id}', [
                'as' => 'category.delete',
                'uses' => 'Backend\CategoryController@delete'
            ]);
            Route::get('/edit/{id}', [
                'as' => 'category.edit',
                'uses' => 'Backend\CategoryController@edit'
            ]);
            Route::post('/edit/{id}', [
                'as' => 'category.post-edit',
                'uses' => 'Backend\CategoryController@processEdit'
            ]);
            Route::post('/add', [
                'as' => 'category.post-add',
                'uses' => 'Backend\CategoryController@processAdd'
            ]);
        });
        //banner
        Route::prefix('/banner')->group(function () {
            Route::get('/index', [
                'as' => 'banner.index',
                'uses' => 'Backend\BannerController@index'
            ]);
            Route::get('/add', [
                'as' => 'banner.add',
                'uses' => 'Backend\BannerController@add'
            ]);
            Route::post('/add', [
                'as' => 'banner.post-add',
                'uses' => 'Backend\BannerController@processAdd'
            ]);
        });

    });
});

