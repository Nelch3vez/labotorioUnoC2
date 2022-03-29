@extends('template.plantilla')
@section('contenedor')
<form action="{{ route('deportes.update', $deporte->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="">Id</label>
        <input type="text" name="id" value="{{$deporte->id}}" class="form-control">
    </div>
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{$deporte->nombre}}" class="form-control">
    </div>
    <div>
        <label for="">Apellido</label>
        <input type="text" name="apellido" value="{{$deporte->apellido}}" class="form-control" >
    </div>
    <div>
        <label for="">Edad</label>
        <input type="text" name="edad" value="{{$deporte->edad}}" class="form-control">
    </div>
    <div>
        <label for="">Deporte</label>
        <input type="text" name="deporte" value="{{$deporte->deporte}}" class="form-control">
    </div>
    <div>
        <label for="">Logro</label>
        <input type="text" name="logro" value="{{$deporte->logro}}" class="form-control">
    </div>
    <br>
    <div>
        <input type="submit" value="Enviar" class="btn btn-success">
    </div>
        
        
</form>
@endsection
