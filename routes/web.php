<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CommentController;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/create',[DemoController::class,'createdUser']);

Route::get('/',[HomeController::class,'page']);
Route::get('/blog',[BlogController::class,'page']);


// all blog show and details route
Route::get('/blogsData',[BlogController::class,'blogsData']);
Route::get('/details/{id}',[BlogController::class,'details']);


// comment insert and show route
Route::post('/storeComment',[BlogController::class,'storeComment']);
Route::get('/comments/{id}',[CommentController::class,'getComment']);



