<?php

use Illuminate\Support\Facades\Route;




use App\Models\User;
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

Route::get('/data-tables', function () {
  return view('layouts\livuewire\master\data-tables');
});

Route::get('/vue-mastery', function () {
  return view('layouts\VueMastery\index');
});

Route::get('/blade-comps', function () {
  return view('BladeInstanceView');
});



Route::group( ['middleware' => ['auth:sanctum', 'verified'] ], function () {

  Route::get('/dashboard', function () {return view('dashboard');})
  ->name('dashboard');

  Route::get('/', [App\Http\Controllers\AuthorController::class, 'index'])
  ->name('index.cms');

  Route::get('{path}','App\Http\Controllers\AuthorController@index')->where( 'path','([-a-z0-9_\s]+)' )
  ->name('any.path');

});
