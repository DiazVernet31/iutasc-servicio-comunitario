<?php

use App\Http\Controllers\Admin\WorkshopController;
use App\Models\Talleres;

// 1. Ruta para ver la página web principal con tus talleres listados dinámicamente
Route::get('/', function () {
    $workshops = Talleres::with('resources')->get();
    return view('talleres.index', compact('workshops'));
});

// 2. Rutas del Administrador para crear y guardar talleres
Route::get('/admin/talleres/crear', [WorkshopController::class, 'create']);
Route::post('/admin/talleres', [WorkshopController::class, 'store'])->name('admin.workshops.store');
