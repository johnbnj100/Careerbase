<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


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

Route::get('/', [ListingController::class, 'index']);

Route::get('/create', [ListingController::class, 'create'])->middleware('auth');

Route::get('/about', [ListingController::class, 'about']);

Route::get('/privacy', [ListingController::class, 'privacy']);

Route::get('/terms', [ListingController::class, 'terms']);

Route::post('/layouts', [ListingController::class, 'store']);

Route::get('/layouts/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

Route::put('/layouts/{listing}', [ListingController::class, 'update'])->middleware('auth');

Route::get('/layouts/{content}', [ListingController::class, 'show']);

Route::get('/illustration/{blogid}', [BlogController::class, 'blogid']);

Route::get('/blog', [BlogController::class, 'blog'])->name('blog');

Route::post('/storeblog', [BlogController::class, 'storeblog']);

Route::get('/createblog', [BlogController::class, 'createblog'])->middleware('auth');

Route::get('/layouts/{listing}', [ListingController::class, 'destroy']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('signin');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/signup', [UserController::class, 'signup'])->name('signup');

Route::post('/usersignup', [UserController::class, 'store']);
