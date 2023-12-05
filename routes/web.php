<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[userController::class, "login"])->name("login")->middleware("guest");
Route::get('/dashboard',[userController::class, "dashboard"])->name("dashboard")->middleware("auth");
Route::get('/usuarios',[userController::class, "usuariosWiew"])->name("user")->middleware("auth");


Route::get('/usuarios/listar',[userController::class, "usuariosListar"])->name("user.listar");


Route::post('/usuarios/iniciarSesion',[userController::class, "sesion"])->name("user.sesion");
Route::post('/usuarios/cerrarSesion',[userController::class, "logout"])->name("user.logout");
Route::post('/usuarios/registrar',[userController::class, "registrar"])->name("user.registrar");