<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('companies', App\Http\Controllers\CompanyController::class);
Route::resource('company-settings', App\Http\Controllers\CompanySettingController::class);
Route::resource('company-setting-type', App\Http\Controllers\CompanySettingTypeController::class);
Route::resource('request', App\Http\Controllers\RequestController::class);
Route::resource('request-assets', App\Http\Controllers\RequestAssetsController::class);
Route::resource('request-assigned-type', App\Http\Controllers\RequestAssignedTypeController::class);
Route::resource('services', App\Http\Controllers\ServicesController::class);
Route::resource('services-ontime', App\Http\Controllers\ServicesOntimeController::class);
Route::resource('team', App\Http\Controllers\TeamController::class);
Route::resource('team-type', App\Http\Controllers\TeamtypeController::class);