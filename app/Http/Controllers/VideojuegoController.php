<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        $videojuegos = Videojuego::all(); 
        return view('videojuegos.index', compact('videojuegos')); 
    }

        

    public function crear_videojuego()
    {
        return view('videojuegos.crear'); 
    }

    public function guardar_videojuego(Request $request)
    {
        $request->validate([
            'NombreV' => 'required',
            'precio' => 'required|numeric',
            'disponibilidad' => 'required',
            'peso' => 'required',
        ]);

      
        if ($request->file('foto') != '') {
            $file = $request->file('foto');
            $img = $file->getClientOriginalName();
            $ldate = date("Ymd_His_");
            $img2 = $ldate . $img;
            $file->move(public_path('img'), $img2);
        } else {
            $img2 = "roblox.png";  
        }

        // Crear el videojuego en la base de datos
        Videojuego::create([
            'NombreV' => $request->input('NombreV'),
            'precio' => $request->input('precio'),
            'disponibilidad' => $request->input('disponibilidad'),
            'peso' => $request->input('peso'),
            'foto' => $img2,

        ]);

        return redirect()->route('videojuegos.index')->with('success', 'Videojuego registrado exitosamente');
    }


    public function editar_videojuego($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        return view('videojuegos.editar', compact('videojuego'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'NombreV' => 'required',
            'precio' => 'required|numeric',
            'disponibilidad' => 'required|boolean',
            'peso' => 'required|numeric',
            'foto' => 'nullable|string'
        ]);

        $videojuego = Videojuego::findOrFail($id);
        $videojuego->update($request->all());

        return redirect()->route('videojuegos.index')->with('success', 'Videojuego actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $videojuego = Videojuego::findOrFail($id);
        $videojuego->delete();
        return redirect()->route('videojuegos.index')->with('success', 'Videojuego eliminado correctamente');
    }

    public function show($id) {
        $videojuego = Videojuego::findOrFail($id);
        return view('videojuegos.detalle', compact('videojuego'));
    }
}
