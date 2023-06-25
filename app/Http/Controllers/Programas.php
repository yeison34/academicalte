<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;

class Programas extends Controller
{
    //
    public function index(){
        $programas=DB::table('programas')->join('facultades','facultades.codFacultad','=','programas.facultad')
        ->select('programas.codPrograma','programas.nomPrograma','programas.facultad','facultades.nomFacultad')->get();
        return view('programas.listado',['programas'=>$programas]);
    }

    public function form_registro(){
        $facultades=DB::table('facultades')->get();
        return view('programas.form_registro',['facultades'=>$facultades]);
    }

    public function registrar(Request $r){
        $programa=new Programa();
        $programa->codPrograma=$r->input('codPrograma');
        $programa->nomPrograma=$r->input('nomPrograma');
        $programa->facultad=$r->input('codFacultad');
        $programa->save();
        return redirect('/programas/listado');
    }

    public function eliminar($id){
        $programa=Programa::findOrFail($id);
        $programa->delete();
        return redirect('/programas/listado');
    }


}
