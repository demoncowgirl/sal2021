<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;

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

  Route::get('/rectangleLayout', function() {
    return view('rectangleLayout');
  });


Route::get('/colorInput', function() {
  return view('colorInput');
});

  //Routes for Messages
  Route::resource('/colorInput', 'App\Http\Controllers\ColorController');
  Route::get('/colors/index', 'App\Http\Controllers\ColorController@index')->name('colors.index');
  Route::post('/colors/store', 'App\Http\Controllers\ColorController@store')->name('colors.store');
  Route::get('/colors/{id}/show', 'App\Http\Controllers\ColorController@show')->name('colors.show');
  Route::get('/colors/{id}', 'App\Http\Controllers\ColorsController@destroy');


  Route::get('colors', function(){
    $colors = DB::table('colors')
          ->orderBy('created_at', 'desc')
          ->limit(40)
          ->get();
    return view('colors.index', ['colors'=> $colors]);
  });
