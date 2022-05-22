<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('/posts',PostController::class);


// Route::get('posts', 'App\Http\Controllers\Api\PostController@index');
// Route::get('posts/{id}', 'App\Http\Controllers\Api\PostController@show');
// Route::post('posts', 'App\Http\Controllers\Api\PostController@store');
// Route::put('posts/{id}', 'App\Http\Controllers\Api\PostController@update');
// Route::delete('posts/{id}', 'App\Http\Controllers\Api\PostController@destroy');

