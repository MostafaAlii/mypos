<?php

Route::name('dashboard.')->group(function() {
    Route::get('/test', function(){
        return 'welcome to dashboard';
    });
});
// end of dashboard routes