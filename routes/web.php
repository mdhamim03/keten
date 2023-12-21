<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\SubCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::middleware(['auth'])->get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('role:admin|writer')->prefix('/profile')->name("profile.")->controller(ProfileController::class)->group(function(){
    Route::get('/profile','profilePage')->name('home');
    Route::post('/profile','profileUpdate')->name('update');
    Route::put('/profile','passwordUpdate')->name('password.update');
});

Route::middleware('role:admin|writer')->prefix('/categories')->name("category.")->controller(CategoryController::class)->group(function(){
    Route::get('/','getAllCategories')->name('all');
    Route::put('/store','StoreCategories')->name('store');
    Route::get('/edit/{slug}','EditCategories')->name('edit');
    Route::put('/update/{slug}','UpdateCategories')->name('update');
    Route::get('/delete{id}','DeleteCategories')->name('delete');
});
Route::middleware('role:admin|writer')->prefix('/Sub-categories')->name('SubCategory.')->controller(SubCategoryController::class)->group(function() {
    Route::get('/','AllSubCategory')->name('all');
    Route::put('/store','StoreSubCategory')->name('store');
});
Route::middleware('role:admin|writer')->prefix('/posts')->name('post.')->controller(PostController::class)->group(function(){
    Route::get('/','AllPOsts')->name('all');
    Route::get('/test','testPost')->name('test');
    Route::post('/post-store','postStore')->name('store');
    Route::get('/all','getAllPost')->name('get.all');
    Route::get('/status','CahangStatus')->name('status');


});