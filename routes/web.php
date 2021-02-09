<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'index']);
Route::get("/contact", [ContactController::class, "index"]);
Route::get('/article',[ArticleController::class,'index']);

Route::get("/backoffice", function () {
    return view("template.second");
});

Route::get("/boNetwork", [HomeController::class, "boNetwork"]);
Route::get("/boArticle", [ArticleController::class, "boArticle"]);
Route::get("/boHome1", [HomeController::class, "boHome1"]);
Route::get("/boHome2", [HomeController::class, "boHome2"]);
Route::get("/boNav", [HomeController::class, "boNav"]);

Route::post("/article-store", [ArticleController::class, "store"]);
Route::post("/home1-store", [HomeController::class, "store"]);
Route::post("/home2-store", [HomeController::class, "add"]);
Route::post("/nav-store", [HomeController::class, "ajouter"]);
Route::post("/network-store", [HomeController::class, "box"]);