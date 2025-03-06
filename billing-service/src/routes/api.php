<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;

// Rutas para clientes
Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index']); // Obtener todos los clientes
    Route::post('/', [ClienteController::class, 'store']); // Crear un cliente
    Route::get('/{id}', [ClienteController::class, 'show']); // Obtener un cliente por ID
    Route::put('/{id}', [ClienteController::class, 'update']); // Actualizar un cliente
    Route::delete('/{id}', [ClienteController::class, 'destroy']); // Eliminar un cliente
});

// Rutas para facturas
Route::prefix('facturas')->group(function () {
    Route::get('/', [FacturaController::class, 'index']); // Obtener todas las facturas
    Route::post('/', [FacturaController::class, 'store']); // Crear una factura
    Route::get('/{id}', [FacturaController::class, 'show']); // Obtener una factura por ID
    Route::put('/{id}', [FacturaController::class, 'update']); // Actualizar una factura
    Route::delete('/{id}', [FacturaController::class, 'destroy']); // Eliminar una factura
});
