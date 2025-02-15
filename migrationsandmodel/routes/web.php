<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Route 1: Simple message for the Greet Activity
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route 2: Call GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'index']);

// Resource route for Tasks CRUD operations
Route::resource('tasks', TaskController::class);

