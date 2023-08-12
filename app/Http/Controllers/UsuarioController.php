<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function mostrar()
    {
        $response = Http::get('http://localhost:8080/usuarios/listar');
        $usuarios = $response->json(); // Convierte la respuesta JSON en un array asociativo

        return view('usuarios.create', compact('usuarios'));
    }

    public function crear(Request $request)
    {
        $response = Http::post('http://localhost:8080/usuarios/guardar', [
            'nombre' => $request->input('nombre'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'tipo' => $request->input('tipo', 'USER'),
            'password' => $request->input('password'),
            'metodopago' => $request->input('metodopago'),

        ]);

        return redirect()->route('usuarios.crear');
    }

    public function ver($id){
        $response = Http::get('http://localhost:8080/usuarios/obtener/'.$id);
        $usuario = $response->json();
        return view('usuarios.update', compact('usuario'));
    }

    public function modificar(Request $request){
        $response = Http::put('http://localhost:8080/usuarios/actualizar', [
            'nombre' => $request->input('nombre'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono'),
            'tipo' => $request->input('tipo'),
            'password' => $request->input('password'),
            'metodopago' => $request->input('metodopago'),
        ]);

        return redirect()->route('usuarios.crear');
    }


    // public function login(Request $request)
    // {
    // $response = Http::get('http://localhost:8080/productos/listar');
    // $productos = $response->json(); // Convierte la respuesta JSON en un array asociativo

    // return view('usuarios.login', compact('productos'));
    // }
    public function login(Request $request)
    {
        $response = Http::get('http://localhost:8080/productos/listar');
        $productos = $response->json(); // Convierte la respuesta JSON en un array asociativo

        $responseUsuarios = Http::get('http://localhost:8080/usuarios/listar');
        $usuarios = $responseUsuarios->json();

        $usuario = collect($usuarios)->firstWhere('email', $request->input('email'));

        if ($usuario && $usuario['password'] === $request->input('password')) {
            // Realizar la autenticación manual
            if ($usuario['tipo'] === 'USER') {
                return view('productos.catalogo', compact('productos'));
            } elseif ($usuario['tipo'] === 'ADMIN') {
                return view('productos.create', compact('productos'));
            }
        } else {
            // Si las credenciales son incorrectas, muestra un mensaje de error en la vista de inicio de sesión
            return view('usuarios.login', compact('productos'));
        }
    }

    public function carrito(){

        return view('usuarios.carrito');
    }


    public function compras(){


        return view('usuarios.compras');
    }



    public function detallecompra(){

        return view('usuarios.detallecompra');
    }


    public function home(){

        return view('usuarios.home');
    }



    public function productohome(){

        return view('usuarios.productohome');
    }


    public function registro(){

        return view('usuarios.registro');
    }

    public function resumenorden(){

        return view('usuarios.resumenorden');
    }

}


