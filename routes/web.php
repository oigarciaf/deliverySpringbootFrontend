<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DirecionController;
use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [UsuarioController::class, 'login'])->name('usuarios.login');

Route::get('/productos/crear', [ProductoController::class, 'mostrar'])->name('productos.crear');
Route::post('productos/crear', [ProductoController::class, 'crear'])->name('productos.crear.post');
Route::get('/productos/eliminar/{id}', [ProductoController::class, 'eliminar'])->name('productos.eliminar');
Route::get('/productos/ver/{id}', [ProductoController::class, 'ver'])->name('productos.ver');
Route::post('/productos/modificar', [ProductoController::class, 'modificar'])->name('productos.modificar');
Route::get('/catalogo', [ProductoController::class, 'catalogo'])->name('catalogo');

Route::get('/direcciones/crear', [DireccionController::class, 'mostrar'])->name('direcciones.crear');
Route::post('direcciones/crear', [DireccionController::class, 'crear'])->name('direcciones.crear.post');
Route::get('/direcciones/eliminar/{id}', [DireccionController::class, 'eliminar'])->name('direcciones.eliminar');
Route::get('/direcciones/ver/{id}', [DireccionController::class, 'ver'])->name('direcciones.ver');
Route::post('/direcciones/modificar', [DireccionController::class, 'modificar'])->name('direcciones.modificar');


Route::get('/usuarios/crear', [UsuarioController::class, 'mostrar'])->name('usuarios.crear');
Route::post('/usuarios/crear', [UsuarioController::class, 'crear'])->name('usuarios.crear.post');
Route::get('/usuarios/ver/{id}', [UsuarioController::class, 'ver'])->name('usuarios.ver');
Route::post('/usuarios/modificar', [UsuarioController::class, 'modificar'])->name('usuarios.modificar');
Route::get('/usuarios/login', [UsuarioController::class, 'login'])->name('usuarios.login');




//lading page de admi
Route::get('/administrador/home', [AdministradorController::class, 'home'])->name('administrador.home');
Route::get('/administrador/detalleorden', [AdministradorController::class, 'detalleorden'])->name('administrador.detalleorden');
Route::get('/administrador/ordenes', [AdministradorController::class, 'ordenes'])->name('administrador.ordenes');
Route::get('/administrador/usuarios', [AdministradorController::class, 'usuarios'])->name('administrador.usuarios');
Route::get('/administrador/eliminar/{id}', [AdministradorController::class, 'eliminarUsuario'])->name('administrador.eliminarUsuario');



//aqui podemos ver todos los productos que hemos agregado
Route::get('/usuarios/carrito', [usuarioController::class, 'carrito'])->name('usuario.carrito');
//aqui vemos las ordenes de compras
Route::get('/usuarios/compras', [usuarioController::class, 'compras'])->name('usuario.compras');
//
Route::get('/usuarios/detallecompra', [usuarioController::class, 'detallecompra'])->name('usuario.detallecompra');
//pagina donde se pueden ver los producto
Route::get('/usuarios/home', [usuarioController::class, 'home'])->name('usuario.home');
//login de usuario 
Route::post('/usuarios/login', [usuarioController::class, 'login'])->name('usuario.login');
//al darle al boton ver producto
Route::get('/usuarios/productohome', [usuarioController::class, 'productohome'])->name('usuarios.productohome');
//pagina donde se va a registrar usuario con correo y contraseña
Route::get('/usuarios/registro', [usuarioController::class, 'registro'])->name('usuario.registro');
//
Route::get('/usuarios/resumenorden', [usuarioController::class, 'resumenorden'])->name('usuario.resumenorden');


// //
// Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
// //
// Route::post('/productos/edit', [ProductosController::class, 'edit'])->name('productos.edit');
// //
// Route::get('/productos/show', [ProductosController::class, 'show'])->name('productos.show');
// // 
// Route::get('/productos/ver/{id}', [ProductosController::class, 'ver'])->name('productos.ver');
// // 
// Route::get('/productos/eliminar/{id}', [ProductosController::class, 'eliminar'])->name('productos.eliminar');
