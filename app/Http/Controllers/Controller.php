<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NombreController extends Controller
{
    // Método para mostrar el formulario
    public function showForm()
    {
        return view('formulario_registro'); // Cargar el formulario desde views/formulario_registro.blade.php
    }

    // Método para registrar al cliente
    public function register(Request $request)
    {
        // Validación de los datos (puedes agregar validaciones aquí si es necesario)
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer',
            'producto' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'dni' => 'required|string|max:20',
            'telefono' => 'required|string|max:20',
        ]);

        // Insertar datos del cliente en la base de datos
        DB::table('clientes')->insert([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'edad' => $request->input('edad'),
            'producto' => $request->input('producto'),
            'precio' => $request->input('precio'),
            'dni' => $request->input('dni'),
            'telefono' => $request->input('telefono')
        ]);

        return "Cliente registrado exitosamente.";
    }
}

