<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Talleres;
use App\Models\Resource;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    // Mostrar formulario para crear taller
    public function create()
    {
        return view('admin.create-workshop');
    }

    // Guardar el taller y sus archivos en la BD
    public function store(Request $request)
    {
        // 1. Validar usando los nombres exactos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'imagen' => 'required|image|max:2048',
        ]);

        // 2. Guardar la imagen principal
        $imagePath = null;
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('workshops', 'public');
        }

        // 3. Crear el registro usando el modelo Talleres
        $taller = Talleres::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'image' => $imagePath,
        ]);

        // 4. Guardar los archivos múltiples (recursos)
        if ($request->hasFile('recursos')) {
            foreach ($request->file('recursos') as $file) {
                $path = $file->store('resources', 'public');
                $extension = strtolower($file->getClientOriginalExtension());
                
                $type = in_array($extension, ['mp4', 'mov', 'avi', 'mkv']) ? 'video' : 
                        (in_array($extension, ['pdf', 'doc', 'docx', 'txt', 'ppt']) ? 'document' : 'image');

                // Usamos la relación para guardar automáticamente el ID del taller
                $taller->resources()->create([
                    'titulo' => $file->getClientOriginalName(),
                    'type' => $type,
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', '¡Taller y archivos subidos con éxito!');
    }
}