<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\StockController;

// Rutas para productos
Route::prefix('productos')->group(function () {
    Route::get('/', [ProductoController::class, 'index']); // Obtener todos los productos
    Route::post('/', [ProductoController::class, 'store']); // Crear un producto
    Route::get('/{id}', [ProductoController::class, 'show']); // Obtener un producto por ID
    Route::put('/{id}', [ProductoController::class, 'update']); // Actualizar un producto
    Route::delete('/{id}', [ProductoController::class, 'destroy']); // Eliminar un producto
});

// Rutas para gestión de stock
Route::prefix('stock')->group(function () {
    Route::get('/', [StockController::class, 'index']); // Obtener el stock de productos
    Route::post('/entrada', [StockController::class, 'entrada']); // Registrar entrada de stock
    Route::post('/salida', [StockController::class, 'salida']); // Registrar salida de stock
});
