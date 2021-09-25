<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDomiciliosController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//rutas 

Route::get('/listar/usuarios', [UserController::class, 'listarUsuarios'])->name('listar.usuarios');
Route::get('/listar/domicilios', [UserDomiciliosController::class, 'listarDomicilios'])->name('listar.domicilios'); 
