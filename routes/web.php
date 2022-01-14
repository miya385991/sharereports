<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ReportsController;
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

Route::get("/", [LoginController::class, "goLogin"]);
Route::post("/login", [LoginController::class, "login"]);
Route::get("/logout", [LoginController::class, "logout"]);
Route::get("/reports/showList", [ReportsController::class, "showList"])->middleware("logincheck");
Route::get("/reports/goAdd", [ReportsController::class, "goAdd"])->middleware("logincheck");
Route::post("/reports/add", [ReportsController::class, "add"])->middleware("logincheck");
Route::get("/reports/showDetail/{id}", [ReportsController::class, "showDetail"])->middleware("logincheck");
Route::get("/reports/prepareEdit/{rpId}", [ReportsController::class, "prepareEdit"])->middleware("logincheck");
Route::post("/reports/edit", [ReportsController::class, "edit"])->middleware("logincheck");
Route::get("/reports/confirmDelete/{rpId}", [ReportsController::class, "confirmDelete"])->middleware("logincheck");
Route::post("/reports/delete", [ReportsController::class, "delete"])->middleware("logincheck");