<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConnactController;
use \App\Http\Controllers\JopController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\CategoreController;
use \App\Http\Controllers\AboutController;
use \App\Http\Controllers\TeamController;
use \App\Http\Controllers\ApplyController;
use \App\Http\Controllers\AdmindashController;
use \App\Http\Controllers\QuestionController;
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
Route::get('/edit/about-us/{id}', [AboutController::class,'edit'])->name('edit_about');
Route::post('/update/about-us/{id}', [AboutController::class,'update'])->name('update_about');

//route of connact
Route::get('/connact',[ConnactController::class,'index'])->name('connact-us');
Route::post('/strore',[ConnactController::class,'store'])->name('store-message');

//route of jop
Route::get('/showall',[JopController::class,'showall_jop'])->name('showall');
Route::get('/jop_detail/{id}',[JopController::class,'details'])->name('jop_detail');
Route::get('/addjop',[JopController::class,'index'])->name('add');
Route::post('/store_jop',[JopController::class,'store'])->name('store_jop');
Route::get('/show_relation/{id}',[JopController::class,'show'])->name('show_relation');

//create profile
Route::get('/create_profile',[ProfileController::class,'create'])->name('create_profile');
Route::post('/store_profile',[ProfileController::class,'store'])->name('store_profile');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::get('/edit_profile/{id}',[ProfileController::class,'edit'])->name('edit_profile');
Route::put('/update_profile/{id}',[ProfileController::class,'update'])->name('update_profile');
Route::delete('/delete_profile/{id}',[ProfileController::class,'destroy'])->name('delete_profile');

//category routes
Route::get('/add_category',[CategoreController::class,'create'])->name('create_category');
Route::post('/store_category',[CategoreController::class,'store'])->name('store_category');
Route::get('/show_category/{id}',[CategoreController::class,'show'])->name('show_category')->where(['id'=>'[0-9]+']);
Route::delete('/delete_category/{id}',[CategoreController::class,'destroy'])->where(['id'=>'[0-9]+'])->name('destroy_category');
Route::get('/edit_category/{id}',[CategoreController::class,'edit'])->name('edit_category')->where(['id'=>'[0-9]+']);
Route::post('/update_category/{id}',[CategoreController::class,'update'])->name('update_category');
Route::get('/show_all_category',[CategoreController::class,'show_all'])->name('all_category');

//our teams
Route::resource('/Team',TeamController::class);

//show applies
Route::get('applies',[ApplyController::class,'apply_person'])->name('apply_person');
Route::get('applies_comapny',[ApplyController::class,'apply_company'])->name('apply_comapny');
Route::get('applies_comapny/{id}',[ApplyController::class,'show_applies'])->name('show_apply');

//admin_dashboard
Route::get('dash',[AdmindashController::class,'getall'])->name('dash');

//qusetion and answer
Route::resource('/question',QuestionController::class);
