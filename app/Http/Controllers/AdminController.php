<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Admin;



class AdminController extends Controller
{
    public function index()
    {
        // Verificar si el usuario autenticado es el administrador
        if (auth()->user()->isAdmin()) {
            return view('adminhome'); // Vista para el administrador
        }

        // Si el usuario no es administrador, redirigirlo a la página principal
        return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página.');
    }
    public function showProfile()
    {
        // Obtener el usuario autenticado
        $admin = Auth::user();

        // Pasar los datos del usuario a la vista
        return view('perfiladmin', compact('admin'));
    }
    public function show()
{
    return view('perfiladmin');
}


public function showAdminProfile()
{
    $admin = Admin::find(1); // O usa el ID del administrador actual
    return view('perfiladmin', compact('admin'));
}


}
