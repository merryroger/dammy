<?php

use Illuminate\Support\Facades\Route;

Route::middleware('authorized')->group(function () {
    Route::name('desktop')->group(function () {
        Route::namespace('Desktop')->group(function () {
            Route::get('/desktop', 'DesktopController@handle');
            Route::post('/desktop', 'DesktopController@treatRequests')->name('.desktop.requests');
            Route::post('/logout', 'DesktopController@logout')->name('.logout');
        });
    });
});

Route::name('guest')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::post('/auth', 'AuthController@listenRequest')->name('.auth.request.listen');
        Route::get('/auth', 'AuthController@checkAuthCode')->name('.auth.check.code');
        Route::get('/logout', 'AuthController@logoff')->name('.logout');
    });

    Route::namespace('Pages')->group(function () {
        Route::get('/news', 'NewsController@showNews')->name('.lvl1.news');
        Route::get('/offices/{section}', 'PageController@showOffice')->where('section', '[a-z]+')->name('.lvl2.offices');
        Route::get('/{section?}', 'PageController@showSections')->where('section', '[a-z_]*')->name('.lvl1.sections');
    });
});

