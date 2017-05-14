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

/*Route::group(['middlewere' => 'auth'], function()
{
  Route::post('/products', 'ProductsCrontroller@create');
});*/
//Route::get('/products', 'ProductController@index');

//Route::get('/products', 'ProductController@index')->middleware('auth'); //AWW YISS REROUTE TILL CONTROLLER


/*Route::get('/products', function(){ // REROUTE MED FUNCTION
  return view('test');
})->middleware('auth');*/

/*Route::get('/products', function(){
  return Auth::user()->name; // RETURN USER NAME
})->middleware('auth');*/

Route::resource('/products', 'ProductController');
Route::resource('/reviews', 'ReviewController');
Route::resource('/stores', 'StoreController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
