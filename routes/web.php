<?php

use Illuminate\Support\Facades\Route;

Route::name('guest')->group(function() {
    Route::namespace('Pages')->group(function() {
        Route::get('/offices/{section}', 'PageController@showOffice')->where('section', '[a-z]+')->name('.lvl2.offices');
        Route::get('/{section?}', 'PageController@showSections')->where('section', '[a-z_]*')->name('.lvl1.sections');
    });
});


