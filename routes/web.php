<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\ApproachController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FavoriteController;


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

Route::get('/', 'App\Http\Controllers\WebController@index')->name('top');

Route::get('/parts', [PartController::class, 'index']);
Route::get('/salons', [SalonController::class, 'index']);
Route::get('/wishes/{part_id}', [WishController::class, 'index']);
Route::get('/approaches', [ApproachController::class, 'index']);

Route::get('/approaches/{id}', [ApproachController::class, 'detail']);
Route::get('/menus', [MenuController::class, 'index']);
Route::get('/favorites', [FavoriteController::class, 'index']);
