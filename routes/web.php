<?php

use App\Http\Controllers\{BooksController, PicturesController, PostsController, AuthController};
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

Route::get('/', function () {
    return view('home');
})->name("home");
Route::get("contact", function () {
    return view('contact');
})->name("contact");
Route::get("about", function () {
    return view('about');
})->name("about");

Route::resources([
    'posts' => PostsController::class,
    'books' => BooksController::class,
    'pictures' => PicturesController::class
]);

Route::get("download/book",[BooksController::class,"download"])->name("book_download");

Route::get("login", [AuthController::class, "loginForm"]);

