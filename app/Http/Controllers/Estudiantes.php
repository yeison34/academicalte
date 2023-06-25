<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function Formulario_Estudiantes(){
        return view('Estudiantes.Formulario_Estudiantes');
    }

    public function Registrar(Request $r){
        $estudiante = new Estudiante();//intancia un objeto del modelko Facultad
        $estudiante->nomestudiante = $r->input('nombreEstudiante');//monbrefacultad=a lo que esta en el formulario
        $estudiante->codestudiante = $r->input('codigoEstudiante');
        $estudiante->edaestudiante = $r->input('edad');
        $estudiante->fechestudiante = $r->input('fecha');
        $estudiante->sexestudiante = $r->input('sexo');
        $estudiante->ciudad = $r->input('ciudad');
        $estudiante->barrio = $r->input('barrio');
        $estudiante->programa = $r->input('programa');

        $estudiante->save();//guarde 
        return redirect()->route('listadoEstu');
    }

    //funcion para listar los estudiantes 
    public function Listar_Estudiantes(){
        
        $estudiante=DB::table('estudiantes')->get();
        return view('Estudiantes.Listar_Estudiantes',['estudiante'=>$estudiante]);
    }

    public function Eliminar($id){
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('listadoEstu');    
    }
}
