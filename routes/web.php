<?php

Route::group(['namespace'=>'Kerisi\LaravelJoget\Http\Controllers'], function() { 
    Route::get('jw/assignments', 'AssignmentController@list');
});