<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Pages')->group(function() {
    Route::get('/{section?}', 'PageController@showSections')->where('section', '[a-z_]*');
});



