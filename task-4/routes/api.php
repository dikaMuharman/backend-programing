<?php

use App\Http\Controllers\AnimalsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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


Route::get('/animals', [AnimalsControlleralsController::class, 'index']);

Route::post('/animals', [AnimalsController::class, 'store']);

Route::put('/animals/{id}', [AnimalsController::class, 'update']);

Route::delete('/animals/{id}', [AnimalsController::class, 'destroy']);


