<?php

use Illuminate\Http\Request;

Route::group([ 'namespace' => 'MdTanvirHasanAnik\Chat\Http\Controllers'], function () {
    Route::get('chat' , 'ChatController@index');
    Route::post('send' , 'ChatController@send');
});


