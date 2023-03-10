<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('tutorial/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategoryPost']);
Route::get('/tutorial/{category_slug}/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewPost']);





Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class, 'update']);
    //Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
    Route::post('delete-category',[App\Http\Controllers\Admin\CategoryController::class, 'destroy']);



    Route::get('posts', [App\Http\Controllers\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\PostController::class, 'store']);
    Route::get('post/{post_id}', [App\Http\Controllers\PostController::class, 'edit']);
    Route::put('update-post/{post_id}',[App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-post/{post_id}',[App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::get('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);

});
