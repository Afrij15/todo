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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Get all Todos

Route::get('todos','App\Http\Controllers\TodoController@getTodo');

//Get specific todo detail
Route::get('todo/{id}','App\Http\Controllers\TodoController@getTodoByID');

//Add new todo
Route::post('addTodo','App\Http\Controllers\TodoController@addTodo');


//Update todo
Route::put('updateTodo/{id}','App\Http\Controllers\TodoController@updateTodo');


//Delete todo
Route::delete('deleteTodo/{id}','App\Http\Controllers\TodoController@deleteTodo');


