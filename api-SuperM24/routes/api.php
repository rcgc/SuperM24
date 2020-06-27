<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('clientes','ClientesController');
Route::apiResource('productos','ProductosController');
Route::apiResource('usuarios','UsuariosController');
Route::apiResource('estatuses','EstatusController');
Route::apiResource('permisos','PermisosController');
Route::apiResource('roles','RolesController');


