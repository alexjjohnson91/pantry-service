<?php

use App\Http\Controllers\PantryItemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('pantry-items', PantryItemController::class);

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'app' => config('app.name'),
        'php_version' => phpversion(),
        'timestamp' => now()->toDateTimeString(),
    ]);
});
