<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
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

Route::get('/vue-static-mastery', function () {
  return view('Playground\VueMastery\Vue-Static');
});

Route::get('/vue-dynamic-mastery', function () {
  return view('Playground\VueMastery\Vue-Dynamic');
});

Route::get('/blade-comps', function () {
  return view('BladeInstanceView');
});

Route::get('/user/{id}/resume', function ($id) {



  // $user = User::findOrFail($id);
  // foreach($user->userResumes as $alias){
  //   echo $alias->pivot;
  // }



  // $query = DB::table('users')->select('name');
  // $addMoreQuery = $query->addSelect('email')->get();
  // echo $addMoreQuery;




  // $countAve = DB::table('resume_data')
  //       ->where('id', $id)
  //       ->avg('user_id');
  // return $countAve;




// $count = DB::table('resume_data')->max('id');
// return $count;



  // $returnMany = DB::table('resume_data')->pluck('resume_file');
  // return $returnMany;

  // $returnOne = DB::table('resume_data')->where('description', 'Humphrey Bogart')->pluck('resume_file');
  // return $returnOne;



  // $user = User::findOrFail($id)->userResumes()->orderBy('id', 'desc')->get();
  // return $user;



  // foreach($user->userResumes as $mtmr){
  //   return $mtmr;
  // }
});

Route::group( ['middleware' => ['auth:sanctum', 'verified'] ], function () {


  Route::get('/dashboard', function () {return view('dashboard');})
  ->name('dashboard');

  Route::get('/', [App\Http\Controllers\AuthorController::class, 'index'])
  ->name('index.cms');

  Route::get('{path}','App\Http\Controllers\AuthorController@index')->where( 'path','([-a-z0-9_\s]+)' )
  ->name('any.path');

});
