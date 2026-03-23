<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'navbar_page']);
Route::get('/our-team',[MainController::class, '']);