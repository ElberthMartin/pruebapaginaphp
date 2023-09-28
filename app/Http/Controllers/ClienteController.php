<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function showForm()
    {
        return view('welcome');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer',
            'producto' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'dni' => 'required|string|max:20',
            'telefono' => 'required|string|max:20',
        ]);

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

