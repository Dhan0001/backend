<?php


use App\Http\Controllers\Api\CarouselController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/carousels', [CarouselController::class, 'index']);
Route::get('/carousels/{id}', [CarouselController::class, 'show']);
Route::post('/carousels', [CarouselController::class, 'store']);
Route::put('/carousels/{id}', [CarouselController::class, 'update']);
Route::delete('/carousels/{id}', [CarouselController::class, 'destroy']);

Route::delete('/user/{id}', [UserController::class, 'destroy']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
