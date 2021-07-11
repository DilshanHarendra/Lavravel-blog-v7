<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
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
Route::get('/',[PostController::class,'showIndex'])->name('home');
Route::post('/create',[PostController::class,'handleCreate'])->name('formAction');
Route::get('/create',[PostController::class,'showCreateForm'])->name('form');

Route::get('/post/update/{id}',[PostController::class,'showUpdateForm'])->name('postUpdate');
Route::put('/post/update/{id}',[PostController::class,'handleUpdate'])->name('postUpdateAction');

Route::get('/post/view/{id}',[PostController::class,'viewPost'])->name('postView');
