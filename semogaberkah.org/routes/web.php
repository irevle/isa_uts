<?php

namespace App\Http\Controllers;
use App\Models\BursaSoal;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'homepage']);
Route::get('/our-team',[MainController::class, 'ourTeam']);
Route::get('/login-page', [MainController::class, 'loginPage']);

// == User Auth ==
Route::post('/login-page/regist', [LoginAuth::class, 'regist']);
Route::post('/login-page/login', [LoginAuth::class, 'login']);

Route::get('/viewer', [BursaSoal::class, 'soalViewer']);
// Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);