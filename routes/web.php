<?php

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



// Route::get('/tasks', 'TasksController@index');
//
// Route::get('/tasks/{task}', 'TasksController@show');


Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{posts}', 'PostsController@show');



// posts
//
// GET /posts - view all the Posts
// GET /posts/create - create all the posts
// POST /posts - saving posts
// GET /posts/{id}/edit - editing posts
// GET /posts/{id} - showing posts
// PATCH /posts{id}
// DELETE /posts{id}
