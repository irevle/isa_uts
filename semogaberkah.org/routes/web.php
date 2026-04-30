<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'homepage']);
Route::get('/our-team',[MainController::class, 'ourTeam']);
Route::get('/login', function(){
    return view('login');
});
Route::get('/BursaSoal', function(){
    return view('BursaSoal');
});
Route::get('/viewer', function () {
    return view('viewer');
});
// Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);