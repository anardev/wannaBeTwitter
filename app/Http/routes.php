<?php

/*
 * Display pages for all users.
 *
 */

Route::group(['middleware' => 'web'], function () {

    Route::get('/', function () {
        return view('pages.home');
    });

    Route::get('/results', [
        'as'   => 'results',
        'uses' => 'PagesController@results'
    ]);

});

/*
 * Authentication routes.
 *
 */
Route::auth();

/*
 * Home page with user statuses.
 *
 */
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [
        'as'   => 'statuses',
        'uses' => 'HomeController@home'
    ]);

    Route::post('/home', [
        'as'   => 'statuses',
        'uses' => 'HomeController@store'
    ]);

});

/*
 * User timeline routes.
 *
 */
Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', 'UsersController');

    Route::get('{username}/timeline', [
        'as'   => 'timeline',
        'uses' => 'UsersController@show'
    ]);

    Route::get('{username}/edit', [
        'as'   => 'users-edit',
        'uses' => 'UsersController@edit'
    ]);

    Route::resource('photos', 'PhotosController', ['except' => [
        'create', 'store', 'destroy'
    ]]);

    Route::post('follows', [
        'as'   => 'follows',
        'uses' => 'FollowsController@store'
    ]);

    Route::delete('{id}', [
        'as'   => 'unfollow',
        'uses' => 'FollowsController@destroy'
    ]);

    Route::get('{id}', [
        'as'   => 'status-delete',
        'uses' => 'UsersController@deleteStatus'
    ]);

});


















