<?php

use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Route::get('/', function () {
//     return view('frontend.homePage');
// });
Route::get('/', [HomeController::class, 'homePage'])->name('frontend');
//CATEGORY FILTRYING SYSTEM
Route::get('/category/{slug}', [HomeController::class, 'getPostByCategory'])->name('PostCate.all');
Route::get('/BlogDetails/{slug}',[HomeController::class,'BlogDetail'])->name('blog.post.details');
//Comment Route
Route::post('/comment',[CommentController::class,'storeconnent'])->name('comment.store');