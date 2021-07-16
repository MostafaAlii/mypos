<?php
Route::group([
'prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
    Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard'], function(){
        Route::get('/home', 'DashboardController@index')->name('dashboard.index');
        // Users and Member
        Route::get('/users', 'UserController@index')->name('user.index');
        Route::get('/users/create', 'UserController@create')->name('user.create');
        Route::post('/users/store', 'UserController@store')->name('user.store');
        Route::get('/users/edit', 'UserController@edit')->name('user.edit');
        Route::get('/users/delete', 'UserController@delete')->name('user.delete');
    });
});