<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        // declaramos variable para el modelo User
        // generamos una consulta: "select * from user"
        // el "paginate()" es para mostrar los datos en n cantidad de vistas
        $users = User::paginate(5);
        //retornar la vista index especificando la ruta
        // compact es para poder hacer uso de la informacion que contiene users en la vista especifica
        return view('user.index', compact('users'));
    }
}
