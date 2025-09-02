<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CurseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('areas', AreaController::class);
Route::resource('apprentices', ApprenticeController::class);
Route::resource('computers', ComputerController::class);
Route::resource('training_centers', TrainingCenterController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('curses', CurseController::class);
