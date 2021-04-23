<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

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
// ruta raiz
//ruta de tipo redirect (link ruta raiz, destino donde se encuentra la visa a convenir)
Route::redirect('/', 'usuarios');

// rutas de User
// ruta de tipo get (link en la web, utilizando la clase UserController y su funcion index)
route::get('usuarios',[UserController::class,'index']);

// ruta de tipo get (link en la web, utilizando la clase UserController y su funcion create)
route::get('usuarios/crear',[UserController::class,'create']);

// ruta de tipo post (link en la web, utilizando la clase UserController y su funcion store)
route::post('usuarios',[UserController::class,'store']);

// ruta de tipo get (link en la web, utilizando la clase UserController y su funcion show)
route::get('usuarios/{id}',[UserController::class,'show']);

// ruta de tipo delete (link en la web, utilizando la clase UserController y su funcion destroy)
route::delete('usuarios/{id}',[UserController::class,'destroy']);

// ruta de tipo get (link en la web, utilizando la clase UserController y su funcion show)
route::get('usuarios/editar/{id}',[UserController::class,'edit']);

// ruta de tipo put (link en la web, utilizando la clase UserController y su funcion update)
route::put('usuarios/{id}',[UserController::class,'update']);

// rutas de company
// ruta de tipo get (link en la web, llamar a la clase CompanyController y su funcion index)
route::get('empresas',[CompanyController::class, 'index']);
