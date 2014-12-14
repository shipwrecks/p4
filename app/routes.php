<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('index');
});

Route::get('/signup','UserController@getSignup' );
Route::get('/login', 'UserController@getLogin' );
Route::post('/signup', 'UserController@postSignup' );
Route::post('/login', 'UserController@postLogin' );
Route::get('/logout', 'UserController@getLogout' );

Route::get('/list', 'TaskController@getIndex');
Route::get('/create', 'TaskController@getCreate');
Route::post('/create', 'TaskController@postCreate');
Route::get('/edit/{task_id}', 'TaskController@getEdit');
Route::post('/edit/{task_id}', 'TaskController@postEdit');
Route::get('/delete/{task_id}', 'TaskController@getDelete');
Route::post('/delete/{task_id}', 'TaskController@postDelete');
Route::get('/done', 'TaskController@getDone');
Route::get('/not_done', 'TaskController@getNotDone');

Route::get('/suggestion_box', 'SuggestionController@getIndex');
Route::get('/create_suggestion', 'SuggestionController@getCreate');
Route::post('/create_suggestion', 'SuggestionController@postCreate');

Route::get('/seedtest', function()
{
        $user = new User;
        $user->email = 'dwa15@dwa15.dwa15';
        $user->password = Hash::make('dwa15dwa15');
        $user->save();
});