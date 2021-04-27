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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/code', function () {
    return view('verify-code');
})->middleware(['auth'])->name('code');

Route::get('/email', function () {
    return view('email');
})->name('email');

Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('/cabinet','App\Http\Controllers\UserController@userVerifyCode')->middleware(['auth'])->name('cabinet');

require __DIR__.'/auth.php';
