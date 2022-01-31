<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ThingController;
use App\Http\Controllers\UsingController;
use App\Http\Controllers\ThingDescriptionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/signup', [AuthController::class, 'registration']);
Route::post('/auth/signin', [AuthController::class, 'login'])->name('login');

// Things
Route::get('/things', [ThingController::class, 'index']);
Route::get('/things/description', [ThingDescriptionController::class, 'index']);
Route::get('/things/{id}', [ThingController::class, 'show']);
Route::get('/things/{id}/description', [ThingController::class, 'description']);
Route::post('/things', [ThingController::class, 'store']);
Route::put('/things/{id}', [ThingController::class, 'update']);
Route::delete('/things/{id}', [ThingController::class, 'destroy']);
Route::post('/things/give', [ThingController::class, 'give']);

// Places
Route::get('/places', [PlaceController::class, 'index']);
Route::get('/places/{id}', [PlaceController::class, 'show']);
Route::post('/places', [PlaceController::class, 'store']);
Route::put('/places/{id}', [PlaceController::class, 'update']);
Route::delete('/places/{id}', [PlaceController::class, 'destroy']);

// Usages
Route::get('/usages', [UsingController::class, 'index']);
Route::get('/usages/{id}', [UsingController::class, 'show']);
Route::post('/usages', [UsingController::class, 'store']);
Route::put('/usages/{id}', [UsingController::class, 'update']);
Route::delete('/usages/{id}', [UsingController::class, 'destroy']);
