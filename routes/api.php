<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Route;

Route::get('/inspire', function () {
    return response()->json([
        'quote' => Inspiring::quote(),
    ]);
});

Route::post('/tasks', [TaskController::class, 'store']);

Route::get('/', function () {
    return response()->json([
        'message' => 'Hello World',
    ]);
});
