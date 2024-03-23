<?php

use App\Http\Controllers\Admins\AdminsController;
use App\Http\Controllers\Articles\ArticlesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersArticlesController;
use Illuminate\Support\Facades\Auth;
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

Route::view('/','pages.index')->name('welcome');
// User routes
Route::prefix('users')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('dashboard','index')->name('home');
    });
    Route::get('users/articles',[UsersArticlesController::class, 'index'])->name('users/articles');
    Route::get('users/articles/create',[UsersArticlesController::class, 'create'])->name('users/articles/create');
    Route::post('users/articles',[UsersArticlesController::class, 'store'])->name('users/articles/store');
})->middleware('auth');

Auth::routes();
// admin routes
Route::prefix('administrator')->group(fn() =>[
    Route::controller(AdminsController::class)->group(function(){
        Route::get('home','index')->name('admins.index');
    }),
    Route::resource('articles',ArticlesController::class),
]);

// register route
Route::post('customed',[RegisterController::class,'mankind'])->name('mankind');
Route::post('redirect',[LoginController::class,'america'])->name('separation');
