@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Estudiantes</h1>
    <form action= "{{url('estudiantes/registrar')}}" method= "POST" >
        @csrf
        <div class="mb-3">
            <label for="codigoFacultad" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigoEstudiante" name="codigoEstudiante" placeholder="Ingrese el código" required/>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreEstudiante" name="nombreEstudiante" placeholder="Ingrese el nombre"required/>
        </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad"required/>      
        </div>

        <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Fecha Nacimiento</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required/>
         </div>

        <div class="mb-3">
            <label for="nombreFacultad" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo" placeholder="M - F" required/>
        </div>

        <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required/>
            </div>

            <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Barrio</label>
                <input type="text" class="form-control" id="barrio" name="barrio" required/>
            </div>

            <div class="mb-3">
                <label for="nombreFacultad" class="form-label">Programa</label>
                <input type="text" class="form-control" id="programa" name="programa" required/>
            </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>


@stop

@section('content')
   

@stop