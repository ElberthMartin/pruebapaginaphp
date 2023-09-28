
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

// Ruta principal (Página de inicio)
Route::get('/', function () {
    return view('index'); // Ruta principal (index.blade.php)
});

// Ruta para mostrar el formulario de registro
Route::get('/registro', [ClienteController::class, 'showForm'])->name('showForm');

// Ruta para procesar el formulario de registro
Route::post('/registrar', [ClienteController::class, 'register'])->name('registrar');

// Ruta para listar clientes
Route::get('/listar', [ClienteController::class, 'listarClientes'])->name('listarClientes');
