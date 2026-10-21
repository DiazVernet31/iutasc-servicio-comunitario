<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web - Servicio comunitario Iuta</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tu CSS desde la carpeta public -->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

<header class="myheader">
    <a href="https://iutacaracas.edu.v" class="logo">
        <!-- Logo en la carpeta public/images -->
        <img src="{{ asset('images/logo-iuta.png') }}" alt="Logo Iuta">
    </a>

    <div class="colum2">
        <div class="redes">
            <a href="https://instagram.com/iutacaracas"><i class="fa-brands fa-instagram instagram-color"></i></a>
            <a href="https://www.facebook.com/Iutacaracas/"><i class="fa-brands fa-facebook facebook-color"></i></a>
            <a href="https://iutacaracas.edu.ve"><i class="fa-solid fa-globe web-color"></i></a>
        </div>
        <div class="img">
            <img src="https://img.freepik.com/fotos-premium/longitud-total-estudiantes-universitarios-felices-caminando-juntos-campus_763111-5348.jpg?w=2000" alt="Estudiantes">
        </div>
    </div>
</header>

<div class="menuNavegacion">
    <nav class="paginas">
        <a href="/">Inicio</a>
        <a href="#talleres-seccion">Talleres</a>
        <a href="">¿Quienes Somos?</a>
    </nav>
</div>

<div class="banner-video">
    <video autoplay loop muted playsinline>
        <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
    </video>
    <div class="capa-azul"></div>
    <h1 class="titulo">Servicio Comunitario IUTA 2026</h1>
</div>

<!-- SECCIÓN DE TALLERES DINÁMICOS -->
<div id="talleres-seccion" style="padding: 50px 20px; max-width: 1000px; margin: 0 auto; font-family: Arial, sans-serif;">
    <h2 style="text-align: center; margin-bottom: 40px; color: #1877F2; font-size: 35px;">periodo lll 285A4<br>tutor académico: Profesor Julio Tovar</h2>

    @foreach($workshops as $workshop)
        <div style="background: #f9f9f9; border: 1px solid #ddd; padding: 25px; margin-bottom: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <h3 style="color: #333; font-size: 24px; margin-top: 0;">{{ $workshop->title }}</h3>
            <p style="color: #666; font-size: 16px; line-height: 1.5;">{{ $workshop->description }}</p>

            @if($workshop->image)
                <div style="margin: 15px 0;">
                    <img src="{{ asset('storage/' . $workshop->image) }}" alt="Imagen del Taller" style="max-width: 250px; border-radius: 6px;">
                </div>
            @endif

            <h4 style="color: #4400ff; margin-top: 20px;">Archivos multimedia y documentos:</h4>
            <ul style="list-style-type: none; padding: 0;">
                @foreach($workshop->resources as $resource)
                    <li style="margin: 8px 0; background: #fff; padding: 10px; border-radius: 5px; border: 1px solid #eee;">
                        @if($resource->type == 'video')
                            🎥 Video: <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank" style="color: #1877F2; text-decoration: none; font-weight: bold;">{{ $resource->title }}</a>
                        @elseif($resource->type == 'document')
                            📄 Documento: <a href="{{ asset('storage/' . $resource->file_path) }}" download style="color: #1877F2; text-decoration: none; font-weight: bold;">{{ $resource->title }}</a>
                        @else
                            🖼️ Imagen: <a href="{{ asset('storage/' . $resource->file_path) }}" target="_blank" style="color: #1877F2; text-decoration: none; font-weight: bold;">{{ $resource->title }}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>

</body>
</html>