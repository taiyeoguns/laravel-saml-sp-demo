<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'SAMLController@login');
Route::post('logout', 'SAMLController@logout');

Route::group(['middleware' => ['samlauth']], function () {
  //protected routes go here
	Route::get('loggedin', 'SAMLController@loggedin');

});
