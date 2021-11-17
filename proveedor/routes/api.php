<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\proveedorController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('proveedor',[proveedorController::class,'index']);
Route::post('proveedor',[proveedorController::class,'store']);
Route::put('proveedor/{proveedor}',[proveedorController::class,'update']);
Route::get('proveedor/{proveedor}',[proveedorController::class,'show']);
Route::delete('proveedor/{proveedor}',[proveedorController::class,'destroy']);