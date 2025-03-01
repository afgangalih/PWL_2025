<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;



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

#Routing Sederhana
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function() {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });
 
// Route::get('/welcome', function() {
//     return 'Selamat Datang!';
// });

// Route::get('/nim', function() {
//     return '234176004';
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya adalah '.$name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar Ke-: ".$commentId;
// });

// Route::get('/articles/{id}', function($artId) {
//     return 'Artikel ID Ke-'.$artId;
// });



#Optional Parameter
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya adalah '.$name;
});

#Controller
//Route::get('/hello', [WelcomeController::class, 'hello']);
//Route::get('/',[PageController::class, 'index'] );
//Route::get('about', [PageController::class, 'about']);
//Route::get('/articles/{id}', [PageController::class, 'articles']);

#Membuat Controller (Pada routing, kita cukup menyebutkan nama class controllernya langsung (HomeController::class) tanpa perlu menentukan metodenya.)
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);


#Resource Controller
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only(['index', 'show']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);