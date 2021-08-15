<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConnactController;
use \App\Http\Controllers\JopController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProfileController;
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
Route::get('/addjop',[JopController::class,'index'])->name('add');
Route::post('/store_jop',[JopController::class,'store'])->name('store_jop');

Route::get('/', [HomeController::class,'index'])->name('index');

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/jop_detail/{id}',[JopController::class,'details'])->name('jop_detail');

Route::get('/connact',[ConnactController::class,'index'])->name('connact-us');
Route::post('/strore',[ConnactController::class,'store'])->name('store-message');

//show all jop
Route::get('/showall',[JopController::class,'showall_jop'])->name('showall');

//create profile
Route::get('/create_profile',[ProfileController::class,'create'])->name('create_profile');
Route::post('/store_profile',[ProfileController::class,'store'])->name('store_profile');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');

Route::get('/jop', function () {
    return view('pages.jop-single');
});
Route::get('/addjop', function () {
    return view('pages.add_new_jop');
});
