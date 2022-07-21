<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


# create a nwe route for the home page
Route::get('/', [UserController::class, 'index'])->name('home');
// route to store user data
Route::post('users/new', [UserController::class, 'store'])->name('user.store');
// route to delete users
// Route::delete('users/{user}', [UserController::class, 'destroy']);
Route::delete('users/delete/{user}', [UserController::class, 'destroy'])->name('user.destroy');