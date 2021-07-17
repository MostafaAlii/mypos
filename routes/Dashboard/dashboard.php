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
    });
});