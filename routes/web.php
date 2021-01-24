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
  $colors = DB::table('colors')
    ->get();
    return view('welcome', ['colors'=> $colors]);
  });

  Route::get('/welcome', function() {
    return view('welcome');
  });

  Route::get('/rectangleLayout', function() {
    return view('rectangleLayout');
  });

  Route::get('/colorInput', function() {
    $colors = DB::table('colors')
      ->get();
  return view('colorInput', ['colors'=> $colors]);
  });


  //Routes for Colors
  Route::resources([
    'colors' => ColorController::class,
  ]);
  Route::get('/colors/index', [ColorController::class, 'index']);
  Route::post('/colors/store', [ColorController::class, 'store']);
  Route::get('/colors/{id}/getColors', [ColorController::class, 'getColors']);
  // Route::get('/colors/{id}/destroy', [ColorController::class, 'destroy']);
  Route::get('/colors/{id}', function ($id) {
    $colors = DB::table('colors')
      ->get();
})->name('colors.destroy');



  // Route::get('color', function(){
  //   $colors = DB::table('colors')
  //         ->random()
  //         ->get();
  //   return view('/colors', ['colors'=> $colors]);
  // });
