<?php

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

