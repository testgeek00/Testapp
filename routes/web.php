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
Route::get('/', 'PagesController@index');
//Route::get('/services','PagesController@services');
//Route::get('/about','PagesController@about');
Route::get('/hello', function () {
    return '<h1>Hi!! How are you!</h1>';
});

Route::get('/hello','hello');
Route::get('/about','about');
Route::get('/services','PagesController@services');
/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/about', function () {
    return view('pages.about');
});
/*Route::match(['get','post'],'/',function(){
    return 'caught you!!';
});
*/
