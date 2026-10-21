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
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('workshops', 'public');
        }

        $workshop = Workshop::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('resources', 'public');
                $extension = strtolower($file->getClientOriginalExtension());
                
                $type = in_array($extension, ['mp4', 'mov', 'avi', 'mkv']) ? 'video' : 
                        (in_array($extension, ['pdf', 'doc', 'docx', 'txt', 'ppt']) ? 'document' : 'image');

                Resource::create([
                    'workshop_id' => $workshop->id,
                    'title' => $file->getClientOriginalName(),
                    'type' => $type,
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', '¡Taller y archivos subidos con éxito!');
    }
}
