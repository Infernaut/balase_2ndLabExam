<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Redirect the root URL to the tasks index route
Route::get('/', function () {
    return redirect()->route('tasks.index');
})->name('index');

// Define resource routes for TaskController
Route::resource('/tasks', TaskController::class);

Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
