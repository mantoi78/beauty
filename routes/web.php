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


//TOPと部位一覧ページの表示
Route::get('/', [PartController::class, 'index'])
    ->name('parts.index');
//部位を選択した後の希望とメニュー一覧の表示
Route::get('/parts/{part_id}', [WishController::class, 'index'])
    ->name('wishes.index');

//メニューから説明ページへ
Route::get('/wishes/{id}', [ApproachController::class, 'detail'])
    ->name('approaches.detail');

//説明ページからサロン一覧へ
Route::get('/salons', [SalonController::class, 'index'])
    ->name('salons.index');




Route::get('/about', function (){
    return view('naon.about');
});





