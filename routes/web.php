<?php

use App\Http\Controllers\GatewayController;
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

Route::get('/', [GatewayController::class, 'show']);
Route::get('login/form', [GatewayController::class, 'store']);
Route::get('deshbord', [GatewayController::class, 'deshbordData']);
Route::get('about', [GatewayController::class, 'aboutStore']);
Route::get('delete/{id}', [GatewayController::class, 'delete'])->name('delete');
Route::get('edit/{id}', [GatewayController::class, 'edit'])->name('edit');
Route::post('update/{id}', [GatewayController::class, 'update'])->name('update');
