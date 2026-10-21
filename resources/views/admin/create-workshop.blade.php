<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador - Subir Taller</title>
</head>
<body style="font-family: Arial; background: #f2f2f2; padding: 40px;">
    <div style="max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <h2>Panel Administrador: Agregar Taller</h2>

        @if(session('success'))
            <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
        @endif

        <form action="{{ route('admin.workshops.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin-bottom: 15px;">
                <label>Título del Taller:</label><br>
                <input type="text" name="title" required style="width: 100%; padding: 8px;">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Descripción:</label><br>
                <textarea name="description" required rows="4" style="width: 100%; padding: 8px;"></textarea>
            </div>

            <div style="margin-bottom: 15px;">
                <label>Imagen Principal del Taller:</label><br>
                <input type="file" name="image">
            </div>

            <div style="margin-bottom: 15px;">
                <label>Subir Videos, Fotos o Documentos (puedes seleccionar varios):</label><br>
                <input type="file" name="files[]" multiple>
            </div>

            <button type="submit" style="background: #1877F2; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Guardar Taller</button>
        </form>
    </div>
</body>
</html>