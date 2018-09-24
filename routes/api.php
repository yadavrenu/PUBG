<?php

Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
});

Route::get('players', 'PlayerController@index');
Route::get('players/{player}', 'PlayerController@show');
Route::post('players', 'PlayerController@store');
Route::put('players/{player}', 'PlayerController@update');
Route::delete('players/{player}', 'PlayerController@delete');

Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});