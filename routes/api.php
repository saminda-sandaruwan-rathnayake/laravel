<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 Route::post('login', 'API\UserController@login');
 Route::post('register', 'API\UserController@register');
 Route::Post('contactus', 'API\UserController@ContactUS');
 Route::Post('eventpost','EventController@store');
 Route::put('eventupdate/{id}','EventController@update');
 Route::delete('eventdelete/{id}','EventController@destroy');
 Route::get('eventgetbyid/{id}','EventController@showbyid');
 Route::get('eventget','EventController@show');



 Route::group(['middleware' => 'auth:api'], function(){
 Route::post('details', 'API\UserController@details');
});