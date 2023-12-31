<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::middleware(['auth', 'user.role:0'])->group(function () {
     Route::get('/home', [HomeController::class, 'user_home'])->name('user.home');
});

Route::middleware(['auth', 'user.role:1'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'admin_home'])->name('admin.home');
});
