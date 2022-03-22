<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\PageController;


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
Route::get('/home', function () {
  return view('home');
});

Route::get('/admin', function () {
    return 'Day la trang quan tri';
  })->middleware('validate_token');

  Route::get('/user', function () {
    return 'Day la trang quan tri user';
  })->middleware('validate_token');

  Route::get('/dashboard', [App\Http\Controllers\Page\PageController::class, 'dashboard' ])
  ->name('dashboard');
  Route::get('/login', [App\Http\Controllers\Page\PageController::class, 'login' ])
  ->name('login');
  Route::get('/password', [App\Http\Controllers\Page\PageController::class, 'password' ])
  ->name('password');
  Route::get('/register', [App\Http\Controllers\Page\PageController::class, 'register' ])
  ->name('register');
  Route::get('/layout', [App\Http\Controllers\Page\PageController::class, 'layout' ])
  ->name('layout');
  Route::get('/withoutmenu', [App\Http\Controllers\Page\PageController::class, 'withoutmenu' ])
  ->name('withoutmenu');
  Route::get('/withoutnarbar', [App\Http\Controllers\Page\PageController::class, 'withoutnarbar' ])
  ->name('withoutnarbar');
  Route::get('/withoutcontainer', [App\Http\Controllers\Page\PageController::class, 'withoutcontainer' ])
  ->name('withoutcontainer');
  Route::get('/fluid', [App\Http\Controllers\Page\PageController::class, 'fluid' ])
  ->name('fluid');
  Route::get('/blank', [App\Http\Controllers\Page\PageController::class, 'blank' ])
  ->name('blank');
  Route::get('/notifications', [App\Http\Controllers\Page\PageController::class, 'notifications' ])
  ->name('notifications');
  Route::get('/accounts', [App\Http\Controllers\Page\PageController::class, 'accounts' ])
  ->name('accounts');
  Route::get('/connections', [App\Http\Controllers\Page\PageController::class, 'connections' ])
  ->name('connections');
  Route::get('/error', [App\Http\Controllers\Page\PageController::class, 'error' ])
  ->name('error');
  Route::get('/undermaintenance', [App\Http\Controllers\Page\PageController::class, 'undermaintenance' ])
  ->name('undermaintenance');