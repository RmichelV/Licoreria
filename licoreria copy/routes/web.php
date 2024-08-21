<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [ProductoController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//productos
Route::resource('productos',ProductoController::class);

Route::get('/agregar-producto', function () {
    return view('productos.agregar');
})->name('agregar-producto');

Route::get('/eliminar-producto/{id}', function ($id) {
    $producto = App\Models\Producto::findOrFail($id);
    return view('productos.eliminar', compact('producto'));
})->name('eliminar-producto');

//carrito
Route::resource('carritos',CarritoController::class);
