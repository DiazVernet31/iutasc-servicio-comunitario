<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web - Servicio Comunitario IUTA</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tu CSS desde la carpeta public -->
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

<header class="myheader">
    <div class="colum2">
        <div class="redes">
            <a href="{{ asset('index.html') }}" class="logo">
                <img src="{{ asset('images/logo-iuta.png') }}" alt="Logo IUTA">
            </a>
            <a href="https://www.instagram.com/servicio_comunitario_iuta?exln=enR5cHllNmJmcHFp&utm_source=qr" target="_blank"><i class="fa-brands fa-instagram instagram-color"></i></a>
            <a href="https://www.facebook.com/Iutacaracas/" target="_blank"><i class="fa-brands fa-facebook facebook-color"></i></a>
            <a href="https://iutacaracas.edu.ve" target="_blank"><i class="fa-solid fa-globe web-color"></i></a>
        </div>
        <div class="img">
            <img src="{{ asset('images/Foto-grupal.jpeg') }}" alt="Estudiantes">
        </div>
    </div>
</header>

<div class="menuNavegacion">
    <nav class="paginas">
        <a href="/">Inicio</a>
        <a href="{{ asset('talleres.html') }}">Talleres</a>
        <a href="#quienes-somos">¿Quiénes Somos?</a>
    </nav>
</div>

<div class="banner-video">
    <video autoplay loop muted playsinline>
        <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
    </video>
    <div class="capa-azul"></div>
    <h1 class="titulo">Servicio Comunitario IUTA 2026</h1>
</div>

<!-- ================= SECCIÓN 1: ¿QUIÉNES SOMOS? ================= -->
<section id="quienes-somos" class="seccion-bloque seccion-azul-1">
    <div class="contenedor-flex">
        <div class="marco-foto">
            <img src="{{ asset('images/quienes somos.jpeg') }}" alt="Proyecto" class="foto-proyecto" onerror="this.onerror=null; this.parentNode.classList.add('sin-imagen');">
            <span class="placeholder-texto"><i class="fa-solid fa-image"></i><br>Coloca aquí la foto del proyecto 1</span>
        </div>
        <div class="bloque-texto">
            <h2 class="titulo-seccion">¿Quiénes Somos?</h2>
            <p class="parrafo-seccion">
                Somos el equipo del Servicio Comunitario del IUTA, comprometidos con la formación integral, el desarrollo tecnológico y el apoyo a las comunidades a través de proyectos orientados a la innovación y el beneficio social.
            </p>
        </div>
    </div>
</section>

<!-- ================= SECCIÓN 2: NUESTRO OBJETIVO (Intercalado y tono azul contrastante) ================= -->
<section id="nuestro-objetivo" class="seccion-bloque seccion-azul-2 invertido">
    <div class="contenedor-flex">
        <div class="marco-foto">
            <img src="{{ asset('images/objetivo.jpeg') }}" alt="Objetivo" class="foto-proyecto" onerror="this.onerror=null; this.parentNode.classList.add('sin-imagen');">
            <span class="placeholder-texto"><i class="fa-solid fa-image"></i><br>Coloca aquí la foto del proyecto 2</span>
        </div>
        <div class="bloque-texto">
            <h2 class="titulo-seccion">Nuestro Objetivo</h2>
            <p class="parrafo-seccion">
                Desarrollar e implementar soluciones tecnológicas prácticas y capacitaciones comunitarias que impulsen la transformación digital y mejoren los procesos administrativos y educativos en nuestro entorno.
            </p>
        </div>
    </div>
</section>

<!-- ================= SECCIÓN 3: CONCLUSIÓN ================= -->
<section id="conclusion" class="seccion-bloque seccion-azul-1">
    <div class="contenedor-flex">
        <div class="marco-foto">
            <img src="{{ asset('images/conclusion.jpeg') }}" alt="Conclusión" class="foto-proyecto" onerror="this.onerror=null; this.parentNode.classList.add('sin-imagen');">
            <span class="placeholder-texto"><i class="fa-solid fa-image"></i><br>Coloca aquí la foto del proyecto 3</span>
        </div>
        <div class="bloque-texto">
            <h2 class="titulo-seccion">Conclusión</h2>
            <p class="parrafo-seccion">
                A través del esfuerzo continuo y el trabajo colaborativo con la comunidad, hemos logrado consolidar aprendizajes significativos y dejar una huella positiva que promueve el desarrollo tecnológico sostenible.
            </p>
        </div>
    </div>
</section>

</body>
</html>