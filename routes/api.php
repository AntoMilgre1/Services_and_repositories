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
Route::post('request/create', [App\Http\Controllers\RequestController::class, 'create'])->name('request.create');
Route::get('request/read/{id}', [App\Http\Controllers\RequestController::class, 'read'])->name('request.read');
Route::get('request/update/{id}', [App\Http\Controllers\RequestController::class, 'update'])->name('request.update');
Route::get('request/delete/{id}', [App\Http\Controllers\RequestController::class, 'delete'])->name('request.delete');


Route::post('requestassets/create', [App\Http\Controllers\RequestAssetsController::class, 'create'])->name('request.create');
Route::get('requestassets/read/{id}', [App\Http\Controllers\RequestAssetsController::class, 'read'])->name('request.read');
Route::get('requestassets/update/{id}', [App\Http\Controllers\RequestAssetsController::class, 'update'])->name('request.update');
Route::get('requestassets/delete/{id}', [App\Http\Controllers\RequestAssetsController::class, 'delete'])->name('request.delete');

Route::post('Team/create', [App\Http\Controllers\TeamController::class, 'create'])->name('request.create');
Route::get('Team/read/{id}', [App\Http\Controllers\TeamController::class, 'read'])->name('request.read');
Route::get('Team/update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('request.update');
Route::get('Team/delete/{id}', [App\Http\Controllers\TeamController::class, 'delete'])->name('request.delete');

Route::post('team_type/create', [App\Http\Controllers\TeamtypeController::class, 'create'])->name('request.create');
Route::get('team_type/read/{id}', [App\Http\Controllers\TeamtypeController::class, 'read'])->name('request.read');
Route::get('team_type/update/{id}', [App\Http\Controllers\TeamtypeController::class, 'update'])->name('request.update');
Route::get('team_type/delete/{id}', [App\Http\Controllers\TeamtypeController::class, 'delete'])->name('request.delete');

Route::post('RequestAssignedType/create', [App\Http\Controllers\RequestAssignedTypeController::class, 'create'])->name('request.create');
Route::get('RequestAssignedType/read/{id}', [App\Http\Controllers\RequestAssignedTypeController::class, 'read'])->name('request.read');
Route::get('RequestAssignedType/update/{id}', [App\Http\Controllers\RequestAssignedTypeController::class, 'update'])->name('request.update');
Route::get('RequestAssignedType/delete/{id}', [App\Http\Controllers\RequestAssignedTypeController::class, 'delete'])->name('request.delete');

Route::post('Company/create', [App\Http\Controllers\CompanyController::class, 'create'])->name('request.create');
Route::get('Company/read/{id}', [App\Http\Controllers\CompanyController::class, 'read'])->name('request.read');
Route::get('Company/update/{id}', [App\Http\Controllers\CompanyController::class, 'update'])->name('request.update');
Route::get('Company/delete/{id}', [App\Http\Controllers\CompanyController::class, 'delete'])->name('request.delete');

Route::post('CompanySetting/create', [App\Http\Controllers\CompanySettingController::class, 'create'])->name('request.create');
Route::get('CompanySetting/read/{id}', [App\Http\Controllers\CompanySettingController::class, 'read'])->name('request.read');
Route::post('CompanySetting/update/{id}', [App\Http\Controllers\CompanySettingController::class, 'update'])->name('request.update');
Route::get('CompanySetting/delete/{id}', [App\Http\Controllers\CompanySettingController::class, 'delete'])->name('request.delete');

Route::post('CompanySettingType/create', [App\Http\Controllers\CompanySettingTypeController::class, 'create'])->name('request.create');
Route::get('CompanySettingType/read/{id}', [App\Http\Controllers\CompanySettingTypeController::class, 'read'])->name('request.read');
Route::get('CompanySettingType/update/{id}', [App\Http\Controllers\CompanySettingTypeController::class, 'update'])->name('request.update');
Route::get('CompanySettingType/delete/{id}', [App\Http\Controllers\CompanySettingTypeController::class, 'delete'])->name('request.delete');

Route::post('Services/create', [App\Http\Controllers\ServicesController::class, 'create'])->name('request.create');
Route::get('Services/read/{id}', [App\Http\Controllers\ServicesController::class, 'read'])->name('request.read');
Route::get('Services/update/{id}', [App\Http\Controllers\ServicesController::class, 'update'])->name('request.update');
Route::get('Services/delete/{id}', [App\Http\Controllers\ServicesController::class, 'delete'])->name('request.delete');

Route::post('ServicesOntime/create', [App\Http\Controllers\ServicesOntimeController::class, 'create'])->name('request.create');
Route::get('ServicesOntime/read/{id}', [App\Http\Controllers\ServicesOntimeController::class, 'read'])->name('request.read');
Route::get('ServicesOntime/update/{id}', [App\Http\Controllers\ServicesOntimeController::class, 'update'])->name('request.update');
Route::get('ServicesOntime/delete/{id}', [App\Http\Controllers\ServicesOntimeController::class, 'delete'])->name('request.delete');
