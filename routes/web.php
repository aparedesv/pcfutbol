<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeWebController;

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

Route::get('/', [HomeWebController::class, 'index']);

require __DIR__.'/auth.php';
require __DIR__.'/backoffice.php';
