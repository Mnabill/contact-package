<?php

use Illuminate\Http\Request;;

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'MN\Contact\Http\Controllers'], function () {

    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('/contact', 'ContactController@send');
});
