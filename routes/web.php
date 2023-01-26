<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, "home"])->name("home");

Route::get('/comics', [ComicController::class, "index"])->name("comics.index");

Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");


Route::get("/comics/{comic}", [ComicController::class, "show"])->name("comic.show");


Route::post("/comics", [ComicController::class, "store"])->name("comics.store");
