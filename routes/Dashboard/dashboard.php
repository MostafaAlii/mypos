<?php
Route::group([
'prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
    Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard'], function(){
        Route::get('/home', 'DashboardController@index')->name('dashboard.index');
    });
});