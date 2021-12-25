<?php

use App\Http\Controllers\Product\ProductController;
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

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', function () {
    return redirect()->route('dashboard');
  });

  Route::get('dashboard', [ProductController::class, 'index'])->name('dashboard');

  Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
  });
});