<?php

use Illuminate\Support\Facades\Route;
use App\Http\COntrollers\StudentController;

Route::resource('/student',StudentController::class);