<?php

namespace App\Http\Controllers;

use App\Models\Deporte;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class DeporteController extends Controller
{
    
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        $deportes = Deporte::where('nombre','LIKE','%'.$busqueda.'%')
                 ->orWhere('apellido','LIKE','%'.$busqueda.'%')
                 ->latest('id')
                 ->paginate(5);
        $data =[
            'deportes'=>$deportes,
            'busqueda'=>$busqueda,

        ];
        return view('deportes.index', $data);
    }

    
    public function create()
    {
        return view('deportes.create');
    }

   
    public function store(Request $request)
    {
        $deporte = new Deporte();
        $deporte->nombre = $request->nombre;
        $deporte->apellido= $request->apellido;
        $deporte->edad = $request->edad;
        $deporte->deporte = $request->deporte;
        $deporte->logro = $request->logro;
        $deporte->save();
        return redirect()->route('deportes.index');

    }

    
    public function show($id)
    {
        $deporte = Deporte::find($id);
        $data = [
            'deporte'=>$deporte
        ];
        return view('deportes.show', $data);
    }

    
    public function edit($id)
    {
         $deporte = Deporte::find($id);
         $data = [
             'deporte'=>$deporte
         ];
         return view('deportes.edit', $data);
    }

    
    public function update(Request $request, $id)
    {
        $deporte = Deporte::find($id);
        $deporte->nombre = $request->nombre;
        $deporte->apellido= $request->apellido;
        $deporte->edad = $request->edad;
        $deporte->deporte = $request->deporte;
        $deporte->logro = $request->logro;
        $deporte->save();
        return redirect()->route('deportes.index');

    }

   
    public function destroy($id)
    {
        $deporte = Deporte::find($id);
        $deporte->delete();
        return redirect()->route('deportes.index');
        
    }
}
