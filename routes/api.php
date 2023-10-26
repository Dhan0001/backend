<?php


use App\Http\Controllers\Api\CarouselController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\LetterController;
use App\Http\Requests\LetterRequest;
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

Route::delete('/letter/{id}', [LetterController::class, 'destroy']);
Route::get('/letter/{id}', [LetterController::class, 'show']);
Route::get('/letter', [LetterController::class, 'index']);
Route::post('/letter', [LetterController::class, 'store']);
