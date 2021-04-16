<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //crear la funcion index ya que vamos a listar las compañias
    public function index(){

        //declaramos la variable para el modelo Company
        // hacemos una consulta usando "paginate()" para mostrar esos datos en n cantidad de paginas
        $companies=Company::paginate(5);

        // retornamos una vista especificando la ruta
        //usamos el compact para hacer uso de la variable $companies que contiene los datos de la bd
        return view('company.index', compact('companies'));
    }
}
