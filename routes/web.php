<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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



Route::get('/dashboard', [DashboardController::class, 'index'])
                ->middleware(['auth'])
                ->name('dashboard');

Route::get('/buy/{montant}/{libelle_achat}', [DashboardController::class, 'buy'])->name('buyy');

Route::get('/hist', [DashboardController::class, 'hist'])->name('histt');

Route::get('/dashNot', [DashboardController::class, 'dashNot'])->name('dashh');

require __DIR__.'/auth.php';
