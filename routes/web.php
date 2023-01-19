<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartidoController;
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

Route::view("/", "layout.login")->name("login");
Route::view("/register", "layout.register")->name("register");
Route::post("/validate-register", [AuthController::class,"register"])->name("validate-register");
Route::post("/validate-login", [AuthController::class,"login"])->name("validate-login");

Route::middleware('auth')->group(function () {
    Route::get("/logout", [AuthController::class, 'logout'])->name("logout");
    Route::get("/dashboard", [PartidoController::class, 'index'])->name("dashboard");
    Route::get("/partidos/create", [PartidoController::class,'create'])->name("create");
    Route::post("/partidos/create", [PartidoController::class, 'store'])->name("create-partido");
    Route::get("/partidos/edit/{partido}", [PartidoController::class, 'edit'])->name("edit-partido");
    Route::put("/partidos/update/{partido}", [PartidoController::class, 'update'])->name("update-partido");
    Route::delete("/partidos/delete/{partido}", [PartidoController::class, 'destroy'])->name('delete-partido');
});


