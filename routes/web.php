<?php

use App\Http\Controllers\ListtingController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\VottingController;
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
Route::get('/listting', [ListtingController::class, 'index']);
Route::get('/votting', [VottingController::class, 'index']);
Route::get('/ranking', [RankingController::class, 'index']);
Route::get('/promotion', [PromotionController::class, 'index']);
Route::post('/listting', [ListtingController::class, 'save'])->name('listting.save');
Route::get('/test', [ListtingController::class, 'indexTest']);
Route::post('/listtingAirdrop', [ListtingController::class, 'saveAirdrop'])->name('save.airdrop');
Route::get('/listtingNew', [ListtingController::class, 'indexNew']);
Route::post('listtingNew', [ListtingController::class, 'saveNew'])->name('save.new');
