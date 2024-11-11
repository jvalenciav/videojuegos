<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Muestra el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('usuarios.login');
    }

    // Procesa el inicio de sesión del usuario
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'CorreoUsuario' => 'required|email',
            'password' => 'required',
        ]);
    
        // Buscar el usuario por correo electrónico
        $usuario = Usuario::where('CorreoUsuario', $request->CorreoUsuario)->first();
    
        // Verificar que el usuario exista y que la contraseña sea correcta
        if ($usuario && Hash::check($request->password, $usuario->password)) {
            // Autenticar manualmente al usuario
            auth()->login($usuario);
    
            // Redirigir según el tipo de usuario
            if ($usuario->CorreoUsuario === 'admin@gmail.com') {
                return redirect()->route('adminhome');
            } elseif ($usuario->CorreoUsuario === 'dueno@gmail.com') {
                return redirect()->route('dueñohome');
            }
    
            // Redirigir a la página principal del usuario normal
            return redirect()->route('home');
        }
    
        // Redirigir con un mensaje de error si las credenciales son incorrectas
        return back()->withErrors([
            'CorreoUsuario' => 'Las credenciales no coinciden.',
        ]);
    }
    
}
