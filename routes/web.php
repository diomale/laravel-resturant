<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', [CustomerController::class, 'showAllCustomers']);
Route::post('/saveCustomer', [CustomerController::class, 'saveCustomer'])->name('saveCustomer');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('deleteCustomer');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('editCustomer');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('updateCustomer');