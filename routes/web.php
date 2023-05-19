<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
  return view('pages/login');
});

Route::get('/register', function () {
  return view('pages/register');
});

Route::get('/tasks/create', function () {
  return view('tasks/create-task');
});


Route::get('/tasks/{id}/edit', function () {
  return view('tasks/edit-task');
});