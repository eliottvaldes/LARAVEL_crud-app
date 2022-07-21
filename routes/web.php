<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('welcome');
// });


# create a nwe route for the home page
Route::get(
    '/',
    'UserController@index'
);

// route to store user data
Route::post(
    '/users',
    'UserController@store'
)->name('users.store');
// add a name to the route


// route to delete users
Route::delete(
    '/users/{user}',
    'UserController@destroy'
)->name('users.destroy');