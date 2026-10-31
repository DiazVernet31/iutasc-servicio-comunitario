<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrador - Servicio Comunitario IUTA</title>
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body class="admin-body">

    <div class="admin-container">
        <div class="form-card">
            <h2>Panel Administrador: Agregar Taller</h2>

            <form action="{{ route('admin.talleres.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="titulo">Título del Taller:</label>
                    <input type="text" id="titulo" name="titulo" required placeholder="Ingresa el título...">
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <textarea id="descripcion" name="descripcion" rows="4" required placeholder="Escribe la descripción del taller..."></textarea>
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen Principal del Taller:</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*" required>
                </div>

                <div class="form-group">
                    <label for="recursos">Subir Videos, Fotos o Documentos (puedes seleccionar varios):</label>
                    <input type="file" id="recursos" name="recursos[]" multiple>
                </div>

                <button type="submit" class="btn-primary">Guardar Taller</button>
            </form>
        </div>
    </div>

</body>
</html>