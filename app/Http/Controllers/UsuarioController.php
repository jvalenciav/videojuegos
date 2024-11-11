<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    // Muestra el formulario de registro
    public function showRegistrationForm()
    {
        return view('usuarios.register');
    }

    // Procesa el registro del usuario
    public function register(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'NombreUsuario' => 'required|string|max:255',
            'ApeUsuario' => 'required|string|max:255',
            'CorreoUsuario' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
            'FotoUsuario' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Crear el usuario en la base de datos
        $usuario = new Usuario();
        $usuario->NombreUsuario = $request->NombreUsuario;
        $usuario->ApeUsuario = $request->ApeUsuario;
        $usuario->CorreoUsuario = $request->CorreoUsuario;
        $usuario->password = Hash::make($request->password);

        // Manejar la subida de la foto, si se proporciona
        if ($request->hasFile('FotoUsuario')) {
            $file = $request->file('FotoUsuario');
            $path = $file->store('fotos_usuarios', 'public');
            $usuario->FotoUsuario = $path;
        }

        $usuario->save();

        // Redirigir al usuario a una página de éxito
        return redirect()->route('usuarios.success');
    }

    // Muestra un mensaje de éxito
    public function success()
    {
        return view('usuarios.success');
    }
    public function showAdminProfile()
{
    // Busca al administrador usando su correo electrónico
    $admin = Usuario::where('CorreoUsuario', 'admin@gmail.com')->first();

    // Retorna la vista 'perfiladmin' con los datos del administrador
    return view('perfiladmin', compact('admin'));
}

}
