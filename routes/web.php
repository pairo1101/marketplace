<?php

use App\Http\Controllers\Listingcontroller;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AccountController::class, 'index'])->name('index');
Route::get('/register', [AccountController::class, 'userRegistration'])->name('registration');
Route::post('/register', [AccountController::class, 'postUser'])->name('postUser');
Route::get('/login', [AccountController::class, 'login'])->name('login');
Route::post('/login', [AccountController::class, 'loginPost'])->name('loginPost');
Route::get('/home/{user}', [AccountController::class, 'home'])->name('user.home');
Route::get('/home/{user}/listingForm', [Listingcontroller::class, 'listingForm'])->name('user.listingForm');
Route::post('/home/list', [Listingcontroller::class, 'postListing'])->name('user.list');
Route::post('/home/{user}/logout', [AccountController::class,'logout'])->name('user.logout');


