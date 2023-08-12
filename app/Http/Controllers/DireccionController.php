<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;//NUEVO



class DireccionController extends Controller
{
    public function mostrar()
    {
        $response = Http::get('http://localhost:8080/direcciones/listar');
        $direcciones = $response->json();

        return view('direcciones.create', compact('direcciones'));
    }


    public function crear(Request $request)
    {
        $response = Http::post('http://localhost:8080/direcciones/guardar', [
            'descripcion' => $request->input('descripcion'),
            'cordenadas' => $request->input('cordenadas'),
            'km' => $request->input('km'),
        ]);
    
        if ($response->successful()) {
            return redirect()->route('direcciones.crear')->with('success', 'Direccion creada exitosamente.');
        } else {
            return back()->withInput()->withErrors('Error al crear la direccion.');
        }
    }

    public function eliminar($id){
        $response = Http::delete('http://localhost:8080/direcciones/eliminar/'.$id);
        return redirect()->route('direcciones.crear');
    }

    public function ver($id){
        $response = Http::get('http://localhost:8080/direcciones/obtener/'.$id);
        $producto = $response->json();
        return view('direcciones.update', compact('producto'));
    }

    public function modificar(Request $request){
        $response = Http::put('http://localhost:8080/direcciones/editar', [
            'id'=>$request->input('id'),
            'descripcion' => $request->input('descripcion'),
            'cordenadas' => $request->input('cordenadas'),
            'km' => $request->input('km'),
        ]);

        return redirect()->route('direcciones.crear');
    }



}