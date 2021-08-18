<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConnactController;
use \App\Http\Controllers\JopController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\CategoreController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\TeamController;
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

//home
Route::get('/', [HomeController::class,'index'])->name('index');

//about
Route::get('/about-us', [AboutController::class,'index'])->name('index_about');


//route of connact
Route::get('/connact',[ConnactController::class,'index'])->name('connact-us');
Route::post('/strore',[ConnactController::class,'store'])->name('store-message');

//route of jop
Route::get('/showall',[JopController::class,'showall_jop'])->name('showall');
Route::get('/jop_detail/{id}',[JopController::class,'details'])->name('jop_detail');
Route::get('/addjop',[JopController::class,'index'])->name('add');
Route::post('/store_jop',[JopController::class,'store'])->name('store_jop');


//create profile
Route::get('/create_profile',[ProfileController::class,'create'])->name('create_profile');
Route::post('/store_profile',[ProfileController::class,'store'])->name('store_profile');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');

//category routes
Route::get('/add_category',[CategoreController::class,'create'])->name('create_category');
Route::post('/store_category',[CategoreController::class,'store'])->name('store_category');
Route::get('/show_category/{id}',[CategoreController::class,'show'])->name('show_category')->where(['id'=>'[0-9]+']);
Route::post('/delete_category/{id}',[CategoreController::class,'destroy'])->where(['id'=>'[0-9]+'])->name('destroy_category');
Route::get('/edit_category/{id}',[CategoreController::class,'edit'])->name('edit_category')->where(['id'=>'[0-9]+']);
Route::post('/update_category/{id}',[CategoreController::class,'update'])->name('update_category');

//our teams
Route::resource('/Team',TeamController::class);

