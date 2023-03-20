<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
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

Route::controller(CostController::class)->prefix('/cost')->group(function () {
    Route::get('', 'index')->name('cost.list');
    Route::get('{cost}', 'show')->name('cost.detail');
    Route::post('', 'store')->name('cost.create');
    Route::patch('{cost}', 'update')->name('cost.update');
    Route::delete('{cost}', 'destroy')->name('cost.delete');
});
