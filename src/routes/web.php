<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index'])->name("form.index");
Route::post('/contacts/confirm', [ContactController::class, 'confirm'])->name("form.confirm");
Route::post('/contacts', [ContactController::class, 'store'])->name("form.store");
