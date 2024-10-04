<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\PrintController;
/*
|--------------------------------------------------------------------------
|  Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
*/
Route::GET('/', [InputController::class, 'EnterReceipt'])->name('enter-receipt');
Route::POST('/receipt-review', [InputController::class, 'ReviewReceipt'])->name('review-receipt');
Route::get('/receipt-process', [InputController::class, 'ProcessReceipt'])->name('process-receipt');







