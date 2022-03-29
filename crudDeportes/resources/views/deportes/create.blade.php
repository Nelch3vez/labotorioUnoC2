@extends('template.plantilla')
@section('contenedor')


<form action="{{ route('deportes.store') }}" method="POST">
    @csrf
    <div>
        <label for="">Id</label>
        <input type="text" name="id" class="form-control" require_once> 
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div>
        <label for="">Apellido</label>
        <input type="text" name="apellido" class="form-control" required>
    </div>
    <div>
        <label for="">Edad</label>
        <input type="text" name="edad" class="form-control" required>
    </div>
    <div>
        <label for="">Deporte</label>
        <input type="text" name="deporte" class="form-control" required>
    </div>
    <div>
        <label for="">Logro</label>
        <input type="text" name="logro" class="form-control" required>
    </div>
    <br>
    <div>
        <input type="submit" value="Enviar" class="btn btn-success">
    </div>        
</form>

@endsection
