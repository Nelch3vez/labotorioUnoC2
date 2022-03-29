@extends('template.plantilla')
@section('contenedor')
<h1>CRUD LARAVEL DEPORTES</h1>
<hr>
<div class="d-md-flex justify-content-md-end">
    <form action="{{  route('deportes.index') }}" method="GET">
        <div class="btn-group">
            <input type="text" name="busqueda" class="form-control">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>
</div>
<br>


<div class="card">
    <div class="card-header">
        <a href= "{{ route('deportes.create') }}" class="btn btn-primary">Crear</a>
    </div>
    <div class="card-body">
    <table class="table">
    <thead>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Deporte</th>
        <th>Logro</th>
        <th>Opciones</th>
    </thead>
    <tbody>
        @foreach ($deportes as $deporte)
         <tr>
             <td>{{$deporte->id}}</td>
             <td>{{$deporte->nombre}}</td>
             <td>{{$deporte->apellido}}</td>
             <td>{{$deporte->edad}}</td>
             <td>{{$deporte->deporte}}</td>
             <td>{{$deporte->logro}}</td>
             <td class="btn-group">
                 <a href="{{ route('deportes.show', $deporte->id) }}" class="btn btn-primary">+</a>
                 <a href="{{ route('deportes.edit', $deporte->id) }}" class="btn btn-warning"> Editar</a>
                 <form action="{{ route('deportes.destroy', $deporte->id) }}" method="POST">
                 @method('DELETE')
                 @csrf
                 <input type="submit" value="Eliminar" class="btn btn-danger">
                 </form>
             </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="4">{{$deportes->appends(['busqueda'=>$busqueda])}}</td>
        </tr>
    </tfoot>
        
            
      

    </div>



</div>
</table>
@endsection
