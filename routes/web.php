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
    Route::get('ve-chung-toi/cong-ty-tnhh-may-moc-va-vat-tu-goldsun.html',[
        'as' => 'about-us.index',
        'uses' => 'Frontend\AboutUsController@index'
    ]);
    Route::get('hau-mai/che-do-hau-mai-tu-goldsun.html',[
        'as' => 'after-sale.index',
        'uses' => 'Frontend\AfterSaleController@index'
    ]);
    Route::get('lien-he.html',[
        'as' => 'contact.index',
        'uses' => 'Frontend\ContactController@index'
    ]);
    Route::get('tin-tuc-su-kien/',[
        'as' => 'news.frontend-index',
        'uses' => 'Frontend\NewsController@index'
    ]);
    Route::get('tin-tuc-su-kien/{slug}.html',[
        'as' => 'news.frontend-detail',
        'uses' => 'Frontend\NewsController@detail'
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
// about use
Route::get('/dang-nhap',[
    'as' => 'auth.login',
    'uses' => 'Backend\AuthController@login'
]);
Route::post('/quen-mat-khau',[
    'as' => 'auth.forget-pasword',
    'uses' => 'Backend\AuthController@forgetPassword'
]);


/**
 * ------------------------------------Backend-------------------------------
 */

Route::group(['middleware' => 'checkLogin'], function() {
    Route::prefix('admin')->group(function () {
        Route::get('/thong-ke-chung', [
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
            Route::get('/sua/{id}', [
                'as' => 'product.edit',
                'uses' => 'Backend\ProductController@edit'
            ]);
            Route::post('/sua/{id}', [
                'as' => 'product.post-edit',
                'uses' => 'Backend\ProductController@processEdit'
            ]);
            Route::get('/xoa/{id}', [
                'as' => 'product.delete',
                'uses' => 'Backend\ProductController@delete'
            ]);
            Route::get('/chi-tiet/{id}', [
                'as' => 'product.detail',
                'uses' => 'Backend\ProductController@showDetail'
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
            Route::get('/sua/{id}', [
                'as' => 'banner.edit',
                'uses' => 'Backend\BannerController@edit'
            ]);
            Route::post('/sua/{id}', [
                'as' => 'banner.post-edit',
                'uses' => 'Backend\BannerController@processEdit'
            ]);
            Route::get('/xoa/{id}', [
                'as' => 'banner.delete',
                'uses' => 'Backend\BannerController@delete'
            ]);

        });
        // news

        Route::prefix('/tin-tuc')->group(function () {
            Route::get('/', [
                'as' => 'news.index',
                'uses' => 'Backend\NewsController@index'
            ]);
            Route::get('/them-moi', [
                'as' => 'news.add',
                'uses' => 'Backend\NewsController@add'
            ]);
            Route::get('/sua/{id}', [
                'as' => 'news.edit',
                'uses' => 'Backend\NewsController@edit'
            ]);
            Route::post('/sua/{id}', [
                'as' => 'news.post-edit',
                'uses' => 'Backend\NewsController@processEdit'
            ]);
            Route::post('/them-moi', [
                'as' => 'news.post-add',
                'uses' => 'Backend\NewsController@processAdd'
            ]);
            Route::get('/xoa/{id}', [
                'as' => 'news.delete',
                'uses' => 'Backend\NewsController@delete'
            ]);
            Route::get('/chi-tiet/{id}', [
                'as' => 'news.detail',
                'uses' => 'Backend\NewsController@showDetail'
            ]);
        });
        Route::prefix('/nguoi-dung')->group(function () {
            Route::get('/', [
                'as' => 'user.index',
                'uses' => 'Backend\UserController@index'
            ]);
            Route::get('/them-moi', [
                'as' => 'user.add',
                'uses' => 'Backend\UserController@add'
            ]);
            Route::get('/xoa/{id}', [
                'as' => 'user.delete',
                'uses' => 'Backend\UserController@delete'
            ]);
            Route::post('/them-moi', [
                'as' => 'user.post-add',
                'uses' => 'Backend\UserController@processAdd'
            ]);
            Route::get('/doi-mat-khau', [
                'as' => 'user.edit',
                'uses' => 'Backend\UserController@resetPassword'
            ]);
            Route::post('/doi-mat-khau', [
                'as' => 'user.post-edit',
                'uses' => 'Backend\UserController@changePassword'
            ]);

        });

    });
});
Route::get('/{id}-{slug}/',[
    'as' => 'product.category',
    'uses' => 'Frontend\ProductsController@category'
]);
Route::get('/products/{slug}.html',[
    'as' => 'product.detail',
    'uses' => 'Frontend\ProductsController@detail'
]);


