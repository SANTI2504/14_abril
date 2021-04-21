<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //retorna una vista html
    public function index(){

        // declaramos variable para el modelo User
        // generamos una consulta: "select * from user"
        // el "paginate()" es para mostrar los datos en n cantidad de vistas
        // el ordeBy es para ordenar la consulta del parametro id en forma descendente
        $users = User::orderBy('id','desc')->paginate(9);

        //retornar la vista index especificando la ruta
        // compact es para poder hacer uso de la informacion que contiene users en la vista especifica
        return view('user.index', compact('users'));
    }

    // formulario retorna una vista html
    public function create(){
        return view('user.create');

    }

    // retorna una respuesta true or false
    // usamos la funcion global-> request que se encarga de tomar todolo que esta llegando
    public function store(Request $request){
        // crear variabla llamada user del modelo User funcion create
        // sql: INSERT INTO usuarios () VALUE ()
        // trae la variable request insertando todo
        $user = User::create($request->all());

        return redirect('usuarios');

    }
    //retorna una vista html
    public function show($id){
        // consulta para que traiga todos los datos por id esto se hace por medio de la funcion find
        // sql: SELECT * FROM users WHERE id = ?
        $user = User::find($id);

        // retornamos la vista show
        // usamos el metodo compact elc ual permite enviarle variables a la vista-> user
        return view('user.show', compact('user'));

    }
}
