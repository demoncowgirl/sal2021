<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function() {
  return view('welcome');
});

// Registration routes
Route::get('auth/register', function() {
    return view('auth/register');
});

Route::resources([
  'users' => UserController::class,
]);

Route::post('/user/store', [UserController::class, 'store']);


// Login routes
Route::get('/auth/login', function() {
  return view('auth/login');
});

// Color routes
Route::get('/squareLayout', function () {
  $colors = DB::table('colors')
    ->load(['hex', 'dmc', 'name'])
    ->orderBy(random_int)
    ->get();
    return view('squareLayout', ['colors'=>$colors]);
  });

  Route::get('/rectangleLayout', function() {
    $colors = DB::table('colors')
    ->load(['hex', 'dmc', 'name'])
    ->orderBy(random_int)
      ->get();
      return view('/rectangleLayout', ['colors'=>$colors]);
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
  Route::get('/colors/delete/{id}', [ColorController::class, 'destroy'])->name('colors.destroy');
