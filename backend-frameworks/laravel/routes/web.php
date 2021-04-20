<?php

use User\Profile;
use Illuminate\Support\Facades\Route;
use Admin\UserController;
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
    return view('index');
});

//User related pages
Route::prefix('user')->middleware(['auth','verified'])->name('user.')->group(function (){
    Route::get('profile', Profile::class)->name('profile');
});
//Admin Routes
Route::prefix('admin')->middleware(['auth','auth.isAdmin','verified'])->name('admin.')->group(function () {
    Route::resource('/users',UserController::class);

});
