<?php

use App\Http\Controllers\ContractController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index']);

Route::prefix('contracts')->group(function () {
    Route::get('/',                 [ContractController::class, 'index']);
    Route::post('/',                [ContractController::class, 'store']);
    Route::patch('/{contractId}',   [ContractController::class, 'update']);
    Route::delete('/{contractId}',  [ContractController::class, 'delete']);
});
