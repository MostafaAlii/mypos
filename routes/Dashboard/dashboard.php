<?php

Route::name('dashboard.')->group(function() {
    Route::get('/test', function(){
        return view('dashboard.index');
    });
});
// end of dashboard routes