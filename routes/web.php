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

// rutas de User
// ruta de tipo get (link en la web, utilizando la clase UserController y su funcion index)
route::get('usuarios',[UserController::class,'index']);

// ruta de tipo get (link en la web, utilizando la clase UserController y su funcion create)
route::get('usuarios/crear',[UserController::class,'create']);

// tuta de tipo post (link en la web, utilizando la clase UserController y su funcion store)
route::post('usuarios',[UserController::class,'store']);

// ruta de tipo get (link en la web, utilizando la clase UserController y su funcion show)
route::get('usuarios/{id}',[UserController::class,'show']);

// rutas de company
// ruta de tipo get (link en la web, llamar a la clase CompanyController y su funcion index)
route::get('empresas',[CompanyController::class, 'index']);
