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
    // es el encarfado de crear el usuario en la base de datos
    // retorna una respuesta true or false
    // usamos la funcion global-> request que se encarga de tomar la data de lo que esta llegando (nombre, apellido y correo)
    public function store(Request $request){
        // crear variabla llamada user del modelo User funcion create
        // sql: INSERT INTO usuarios () VALUE ()
        // trae la variable request insertando la data
        $user = User::create($request->all());

        //redirigir a la vista usuarios
        //agregamos un whit el cual se encarga de crear algo en la pagina y muere cuando refresaca la pagina
        //with(variable, valor de la variable )
        return redirect('usuarios')->with('status', 'se ha creado un usuario correctamente')->with('type', 'success');

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
    // es el encargadoo de eliminar datos en la bbdd
    // retorna una respuesta true or false
    public function destroy($id){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $user = User::find($id)->delete();

        //retornar la ruta donde se encuentra  index
        //agregamos un whit el cual se encarga de crear algo en la pagina y muere cuando refresaca la pagina
        //with(variable, valor de la variable )
        return redirect('usuarios')->with('status', 'Se ha eliminado el usuario correctamente')->with('type', 'danger');
    }

    //retorna una vista html
    public function edit($id){
        // consulta para que etraiga todos los datos por id
        // SELECT * FROM users WHERE ID = ?
        $user = User::find($id);

        //retornamos la vista donde se encuentra el formulario de actualizacion
        // le agregamos un compact para que haga uso de la variable user en la vista edit
        return view('user.edit', compact('user'));
    }

    //encargado de actualizar los datos a la bbdd
    //retornara una respuesta true or false
    //se necesitara de un id pára saber a quien se va a actualizar
    // usamos la funcion global-> request que se encarga de tomar la data que esta llegando (nombre , apellido y correo)
    public function update(Request $request, $id){
        //hacer una consulta por id , luego actualiza toda la data que se le envio por el usuario
        $user = User::find($id)->update($request->all());

        //retornar la ruta donde se encuentra  index
        //agregamos un whit el cual se encarga de crear algo en la pagina y muere cuando refresaca la pagina
        //with(variable, valor de la variable )
        return redirect('usuarios')->with('status', 'Se ha actualizado el usuario correctamente')->with('type', 'warning');
    }
}
