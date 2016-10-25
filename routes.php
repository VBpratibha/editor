<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {
Route::get('/static',[
    'as' => 'static',
    'uses' => 'LaravelContent\Contents\ContentController@index',
    
]);

}); 
Route::group(['middleware' => ['web']], function(){
Route::post('/static/store',[
    'as' => 'static.store',
    'uses' => 'LaravelContent\Contents\ContentController@store',
    
]);

});

Route::group(['middleware' => ['web']], function () {
Route::get('/static/display',[
    'as' => 'static.display',
    'uses' => 'LaravelContent\Contents\ContentController@display',
    
]);

}); 