<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;

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


Route::get('/', function () {
        // passing data all the uploaded posts of the user 
        $posts = [];
        $posts = auth()->user()->userPosts()->latest()->get();
        return view('home', ['posts' => $posts]);
})->middleware('auth');

Route::get('/sign-in', function (){
    if (Auth::check()) {
        return view('home');
    }else{
        return view('/login');
    }
})->name('login');
Route::get('/sign-up', function (){
    if (Auth::check()) {
        return view('home');
    }else{
        return view('/register');
    }
});


Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/login', [UserController::class, 'login']);
Route::get('/post/edit/{post}', [PostController::class, 'editPostScreen'])->can('update','post');
Route::put('/post/edit/{post}', [PostController::class, 'editPost'])->can('update','post');
Route::post('/create-post', [PostController::class, 'createPost'])->middleware('auth');
Route::delete('/post/{post}', [PostController::class, 'deletePost'])->can('update','post');