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
// Route::get('/sayed/{thing}', function ($thing) {
//     return "<center><h1>Welcome to sayed personal web site</h1></center>".$thing;
// })->where('thing','[A-Z]+');

// Route::get('/library', 'sectionController@index');

Route::resource('/library','sectionController');