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


/*Route for home page of user*/
Route:: get('/home page','UserController@homepage');
Route::get('/contact us','UserController@contact');
Route::get('/pizza menu','UserController@pizzamenu');
Route::get('/about us','UserController@about');

//Route for Authenticate
Auth::routes();

Route::get('/', function () {
    return view('AdminPage.welcome');
});

// admin homepage
Route::get('/home', 'HomeController@index')->name('AdminPage.home');
//form insert page
Route::get('/insert', 'HomeController@insert')->name('insert');
//submit insertion of new item
Route::post('/store', 'HomeController@store')->name('AdminPage.store');
//show id in url
Route::get('/show/{id}','HomeController@show');
//Update
Route::post('/update','HomeController@update');
//delete
Route::post('/delete','HomeController@delete');


