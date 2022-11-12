<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ClubApiController;
use App\Http\Controllers\Api\EquipApiController;
use App\Http\Controllers\Api\CiutatApiController;
use App\Http\Controllers\Api\PartitApiController;
use App\Http\Controllers\Api\JornadaApiController;
use App\Http\Controllers\Api\JugadorApiController;
use App\Http\Controllers\Api\CompeticioApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::post('/auth/login', [AuthApiController::class, 'loginUser']);

$router->group(['middleware' => 'auth:sanctum'], function () use ($router) {

    Route::resources([
        'ciutats' => CiutatApiController::class,
        'clubs' => ClubApiController::class,
        'equips' => EquipApiController::class,
        'jugadors' => JugadorApiController::class,
        'competicions' => CompeticioApiController::class,
        'partits' => PartitApiController::class,
    ]);

    // jornades
    $router->get('/jornades/{id_competicio}/{num_jornada}', [JornadaApiController::class, 'show']);
});
