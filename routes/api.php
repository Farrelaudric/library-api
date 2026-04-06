<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\MemberController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// 🔥 TEST ROUTE (buat cek server normal atau tidak)
Route::get('/test', function () {
    return response()->json([
        'message' => 'OK',
        'status'  => true
    ]);
});

// Default route (optional)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// 🔥 ROUTES UTAMA
Route::apiResource('books', BookController::class);
Route::apiResource('members', MemberController::class);
