<?php

use App\Http\Controllers\Admin\WorkshopController;
use App\Models\Talleres;
use Illuminate\Support\Facades\Route;

// 1. Ruta para ver la página web principal con tus talleres listados dinámicamente
Route::get('/', function () {
    $workshops = Talleres::with('resources')->get();
    return view('talleres.index', compact('workshops'));
});

// 2. Rutas del panel de administración para Talleres
Route::get('/admin/talleres/crear', [WorkshopController::class, 'create'])->name('admin.talleres.create');
Route::post('/admin/talleres', [WorkshopController::class, 'store'])->name('admin.talleres.store');
