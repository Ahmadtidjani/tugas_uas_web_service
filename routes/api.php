<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/students', 'StudentsController@index');
route::get('/students/create', 'StudentsController@create');
route::get('/students/{student}', 'StudentsController@show');
route::post('/students', 'StudentsController@store');
route::delete('/students/{student}', 'StudentsController@destroy');
route::get('/students/{student}/edit', 'StudentsController@edit');
route::patch('/students/{student}', 'StudentsController@update');
