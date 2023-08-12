<?php

namespace App\Http\Controllers;


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//NUEVO
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AdministradorController extends Controller
{
    //

    public function home(){
        return view('administrador.home');
    }


    public function detalleorden(){
        return view('administrador.detalleorden');
    }


    public function ordenes(){
        return view('administrador.ordenes');
    }

    public function usuarios(){
        {
            $response = Http::get('http://localhost:8080/usuarios/listar');
            $usuarios = $response->json(); // Convierte la respuesta JSON en un array asociativo
    
            return view('administrador.usuarios', compact('usuarios'));
        }
    }

    public function eliminarUsuario($id){
        $response = Http::delete('http://localhost:8080/usuarios/eliminar/'.$id);
        return redirect()->route('administrador.usuarios');
    }

}
