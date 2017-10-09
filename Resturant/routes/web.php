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
Route:: get('/homepage','UserController@homepage');
Route::get('/contactus','UserController@contact');
Route::get('/aboutus','UserController@about');
Route::get('/pizzamenu','UserController@pizzamenu');
Route::get('/burgermenu','UserController@burgermenu');
Route::get('/drinkmenu','UserController@drinkmenu');
Route::get('/desertmenu','UserController@desertmenu');
Html::macro('clever_link', function ($route){
    $path = Request::path();
    $focus = "";

    if ( $route == $path){
        $focus = "active";
    }
    else{
        $focus = "";
    }
    return $focus;

});

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


