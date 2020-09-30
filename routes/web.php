<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BookEntryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::get('/entry/{id}', [BookEntryController::class, 'edit'])->name('entry.edit');
Route::get('/update/{id}', [BookEntryController::class, 'update'])->name('entry.update');
Route::get('/create', [BookEntryController::class, 'create'])->name('entry.create');
Route::get('/store', [BookEntryController::class, 'store'])->name('entry.store');
Route::get('/delete/{id}', [BookEntryController::class, 'delete'])->name('entry.delete');

