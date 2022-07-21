<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


# create a nwe route for the home page
Route::get('/', [UserController::class, 'index']);
// route to store user data
Route::post('users', [UserController::class, 'store']);
// route to delete users
// Route::delete('users/{user}', [UserController::class, 'destroy']);
Route::delete('users/{user}', [UserController::class, 'delete'])->name('user.delete');