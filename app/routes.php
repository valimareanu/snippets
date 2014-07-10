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

Route::get('/', array('as' => 'new_snippet', 'uses' => 'snippets@create'));
Route::post('/', 'snippets@store');
Route::get('/{id}/fork', array('as' => 'fork_snippet', 'uses' => 'snippets@fork'))->where('id', '[0-9]+');
Route::get('/{id}', array('as' => 'snippet', 'uses' => 'snippets@show'))->where('id', '[0-9]+');