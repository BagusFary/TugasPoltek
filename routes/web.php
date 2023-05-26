<?php

use App\Http\Controllers\TeleponController;
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

Route::get('/', [TeleponController::class, 'index']);
Route::get('/tambah-data', [TeleponController::class, 'create']);
Route::post('/store-data', [TeleponController::class, 'store']);
Route::get('/edit-data/{id}', [TeleponController::class, 'edit']);
Route::put('/update-data/{id}', [TeleponController::class, 'update']);
Route::delete('/delete-data/{id}', [TeleponController::class, 'delete']);


