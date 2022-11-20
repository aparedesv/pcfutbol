<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\ProfileBackofficeController;
use App\Http\Controllers\Backoffice\DashboardBackofficeController;

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

$router->group(['middleware' => ['auth', 'verified']], function () use ($router) {

    Route::get('/dashboard', [DashboardBackofficeController::class, 'index'])->name('backoffice.dashboard');
    Route::get('/profile', [ProfileBackofficeController::class, 'index'])->name('backoffice.profile');

});
