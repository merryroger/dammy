<?php

use Illuminate\Support\Facades\Route;

Route::name('guest')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::post('/auth', 'AuthController@listenRequest')->name('.auth.request.listen');
        Route::get('/auth', 'AuthController@checkAuthCode')->name('.auth.check.code');
    });

    Route::namespace('Pages')->group(function () {
        Route::get('/news', 'NewsController@showNews')->name('.lvl1.news');
        Route::get('/offices/{section}', 'PageController@showOffice')->where('section', '[a-z]+')->name('.lvl2.offices');
        Route::get('/{section?}', 'PageController@showSections')->where('section', '[a-z_]*')->name('.lvl1.sections');
    });
});


