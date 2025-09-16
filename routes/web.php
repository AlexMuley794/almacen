<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Ruta pública
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación (generadas por Breeze)
require __DIR__.'/auth.php';

// Dashboard - requiere autenticación
Route::get('/dashboard', function () {
    $user = auth()->user();
    if ($user->hasRole('admin')) {
        return view('dashboard.admin');
    } else {
        return view('dashboard.empleado');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Productos - Empleados pueden ver, solo admins pueden modificar
    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');
    
    // Rutas solo para admin
    Route::middleware('role:admin')->group(function () {
        Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
        Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
        Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
        Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
        Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');
        
        // Categorías - Solo admin
        Route::resource('categories', CategoryController::class);
        
        // Proveedores - Solo admin
        Route::resource('suppliers', SupplierController::class);
    });
    
    // Rutas para empleados (solo lectura de categorías y proveedores)
    Route::middleware('role:empleado')->group(function () {
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.readonly');
        Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show.readonly');
        Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.readonly');
        Route::get('/suppliers/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show.readonly');
    });
});
