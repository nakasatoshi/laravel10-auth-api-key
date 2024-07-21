<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HogeApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth.apikey')->get('/tes/data', function () {
    return response()->json(['message' => 'Authenticated successfully!']);
});

Route::middleware('auth.apikey')->group(function () {
    Route::get('/hoge/{id}', [HogeApiController::class, 'get']);
    Route::post('/hoge/store/{id}', [HogeApiController::class, 'store']);
});
