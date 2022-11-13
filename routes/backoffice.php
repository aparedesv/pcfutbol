<?php

use App\Http\Controllers\Backoffice\DashboardBackofficeController;
use Illuminate\Support\Facades\Route;

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

});
