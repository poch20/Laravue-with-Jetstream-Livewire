<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources(['user' => 'App\Http\Controllers\API\UserController']);
Route::get('/fill-user-profile-form/{http_arg_params}', 'App\Http\Controllers\API\UserController@createdVueFillProfileForm');
Route::get('/search-users-on-admin-area', 'App\Http\Controllers\API\UserController@searchReturnsForAdmin');
Route::get('/search-user-uploads-of-type-user', 'App\Http\Controllers\API\ResumeController@resumeSearchResultsOfTypeUserUploads');
Route::put('/edit-user-profile', 'App\Http\Controllers\API\UserController@updateProfileInfo');

Route::apiResources( ['keyResumeDataContr' => 'App\Http\Controllers\API\ResumeController'] );
Route::get('/custom-get-keyResumeDataContr-by/{id}', 'App\Http\Controllers\API\ResumeController@apiRequestPHPCallBySessionId');
Route::get('/get-resume-data-returns/{id}', 'App\Http\Controllers\API\ResumeController@getResumeAPIResponseData');
Route::post('/post-res-vue-del/{id}', 'App\Http\Controllers\API\ResumeController@postResVueDel');
