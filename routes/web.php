<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Route::get('/l', function () {
//     return view('table');
// });

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::resource('/user', App\Http\Controllers\UserController::class);
 Route::put('/user/{user}/changepassword', [App\Http\Controllers\UserController::class, 'changepassword'])->name('changepassword');
 Route::put('/user/{user}/changeavatar/', [App\Http\Controllers\UserController::class, 'changeavatar'])->name('changeavatar');
 Route::resource('/activity', App\Http\Controllers\ActivityController::class);
  Route::get('/loginactivity', [App\Http\Controllers\ActivityController::class, 'loginactivity'])->name('activity.loginactivity');
    Route::get('/visitorlog', [App\Http\Controllers\ActivityController::class, 'visitorlog'])->name('activity.visitorlog');
    Route::get('/urlvisits', [App\Http\Controllers\ActivityController::class, 'urlvisits'])->name('activity.urlvisits');



});
