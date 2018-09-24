<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'FilmController@index');

Route::get('films', 'FilmController@index');
Route::get('films/{film}', 'FilmController@show');
Route::post('films', 'FilmController@store');
Route::put('films/{film}', 'FilmController@update');
Route::delete('films/{film}', 'FilmController@delete');

//Route::get('comment', 'CommentController@index');
Route::get('comment/{film}', 'CommentController@show');
Route::post('comments', 'CommentController@store');
//Route::put('comments/{comment}', 'CommentController@update');
Route::delete('comments/{comment}', 'CommentController@delete');