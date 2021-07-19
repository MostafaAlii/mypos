<?php
Route::group([
'prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
    Route::group(['namespace' => 'Dashboard','middleware' =>  'auth', 'prefix' => 'dashboard'], function(){
        Route::get('/home', 'DashboardController@index')->name('dashboard.index');
        // Users and Member
        Route::get('/users', 'UserController@index')->name('user.index');
        Route::get('/users/create', 'UserController@create')->name('user.create');
        Route::post('/users/store', 'UserController@store')->name('user.store');
        Route::get('/users/edit/{id}', 'UserController@edit')->name('user.edit');
        Route::post('/users/update/{id}', 'UserController@update')->name('user.update');
        Route::get('/users/delete/{id}', 'UserController@destroy')->name('user.delete');
        // Categories
        Route::get('/category', 'CategoryController@index')->name('category.index');
        Route::get('/category/create', 'CategoryController@create')->name('category.create');
        Route::post('/category/store', 'CategoryController@store')->name('category.store');
        Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
        Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
        Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');
        // Products
        Route::get('/product', 'ProductController@index')->name('product.index');
        Route::get('/product/create', 'ProductController@create')->name('product.create');
        Route::post('/product/store', 'ProductController@store')->name('product.store');
        Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
        Route::post('/product/update/{id}', 'ProductController@update')->name('product.update');
        Route::get('/product/delete/{id}', 'ProductController@destroy')->name('product.delete');
    });
});