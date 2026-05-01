<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get("/", [MainController::class, "homepage"]);
Route::get("/our-team", [MainController::class, "ourTeam"]);
Route::get("/dashboard", function () {
    return view("dashboard");
});
// Route::get('/bursa-soal',[MainController::class, 'bursaSoal']);
