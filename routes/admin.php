<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


Route::get('', [HomeController::class, 'index']);