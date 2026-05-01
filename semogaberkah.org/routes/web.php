<?php

use App\Http\Controllers\MainController;
use App\Models\BursaSoal;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'homepage']);
Route::get('/our-team',[MainController::class, 'ourTeam']);
Route::get('/login', function(){
    return view('login');
});
Route::get('/viewer', [BursaSoal::class, 'soalViewer']);
// Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);