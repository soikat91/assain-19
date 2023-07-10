<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\DetailsController;
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


Route::get('/blog',[BlogController::class,'page']);
Route::get('/',[HomeController::class,'page']);
Route::get('/details',[DetailsController::class,'page']);


Route::get('/blogsData',[BlogController::class,'blogsData']);
Route::get('/details/{id}',[BlogController::class,'details']);
//Route::get('/details',[DetailsController::class,'blogsData']);