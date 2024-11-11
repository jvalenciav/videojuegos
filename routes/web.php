<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\UsuarioController;
//Rutas para el registro de usuarios//
Route::get('/register', [UsuarioController::class, 'showRegistrationForm'])->name('usuarios.register');
Route::post('/register', [UsuarioController::class, 'register'])->name('usuarios.register.submit');
Route::get('/register/success', [UsuarioController::class, 'success'])->name('usuarios.success');

Route::get('/usuario', function () {
    return view('usuarios.register');
});
//login//
Route::get('/login', function () {
    return view('usuarios.login');
})->name('usuarios.login');


Route::post('/login', [UsuarioController::class, 'login'])->name('usuarios.login.submit');


use App\Http\Controllers\AuthController;

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('usuarios.login');

// Ruta para procesar el inicio de sesión
Route::post('/login', [AuthController::class, 'login'])->name('usuarios.login.submit');

// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('usuarios.logout');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('usuarios.login');
Route::post('/login', [AuthController::class, 'login'])->name('usuarios.login.submit');



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('usuarios.login.submit');

Route::get('/home', function () {
    return view('home');
})->name('home');
 //ruta para home administrador 

 Route::get('/adminhome', function () {
    return view('adminhome');
})->name('adminhome');

//dueño//
Route::get('/dueñohome', function () {
    return view('dueñohome');
})->name('dueñohome');

use App\Http\Controllers\AdminController;



Route::get('/perfiladmin', [AdminController::class, 'showAdminProfile'])->name('perfiladmin');
Route::get('/usuario/perfil', [UserController::class, 'showUserProfile'])->name('usuario.perfil');


use App\Http\Controllers\GameController;

Route::get('/callo', [GameController::class, 'showCallo'])->name('Callo');

use App\Http\Controllers\VideojuegoController;

// Ruta para listar todos los videojuegos
Route::get('/videojuegos', [VideojuegoController::class, 'index'])->name('videojuegos.index');

// Ruta para mostrar el formulario de creación de un nuevo videojuego
Route::get('/videojuegos/crear', [VideojuegoController::class, 'crear_videojuego'])->name('videojuegos.crear');

// Ruta para guardar un nuevo videojuego
Route::post('/videojuegos', [VideojuegoController::class, 'guardar_videojuego'])->name('videojuegos.guardar');

// Ruta para mostrar el formulario de edición de un videojuego
Route::get('/videojuegos/{id}/editar', [VideojuegoController::class, 'editar_videojuego'])->name('videojuegos.edit');

// Ruta para actualizar un videojuego existente
Route::put('/videojuegos/{id}', [VideojuegoController::class, 'update'])->name('videojuegos.update');

// Ruta para eliminar un videojuego
Route::delete('/videojuegos/{id}', [VideojuegoController::class, 'destroy'])->name('videojuegos.destroy');

// Ruta para mostrar los detalles de un videojuego
Route::get('/videojuegos/{id}', [VideojuegoController::class, 'show'])->name('videojuegos.show');
Route::post('/videojuegos', [VideojuegoController::class, 'guardar_videojuego'])->name('videojuegos.guardar');
Route::put('/videojuegos/{id}', [VideojuegoController::class, 'update'])->name('videojuegos.update');
