<?php
require_once __DIR__ . '/../../backend/auth_token.php';
require_once __DIR__ . '/../../backend/remem_token.php';

// Si NO está vigente Y TAMPOCO está activa, para afuera
if ($estado_auth['autenticacion'] !== 'vigente' && $remem_auth['autenticacion'] !== 'activa') {
    header("Location: ../paginas/login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1fa3d6">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <meta name="description" content="Gestión de cargas dentro de la plataforma Stylo Camión">
    <meta name="robots" content="noindex, nofollow, noarchive">

    <title>Stylo Camión | Módulo de Cargas</title>

    <!-- Favicons -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Librerías -->
    <link rel="stylesheet" href="/activos/libs/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="/activos/libs/jquery-3.7.1.min.js" defer></script>
    <script src="/activos/libs/bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/activos/css/cargas/cargas.css">

    <!-- JS -->
    <script src="/activos/scripts-js/cargas/cargas.js" defer></script>

</head>

<body>
    <header class="d-flex justify-content-center align-items-strech">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid gap-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" data-section="cargas" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Encuentra y filtra cargas disponibles de forma rápida y sencilla.">Buscador de Cargas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-section="licitaciones" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Participa en procesos de licitación y compite por contratos de transporte.">Licitaciónes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-section="comunidad" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Comparte experiencias, consejos y novedades con otros miembros de la comunidad.">Muro de la Comunidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-section="postulaciones" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Visualiza y gestiona el estado de tus postulaciones en licitaciones o cargas.">Mis Postulaciónes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-section="presentacion" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Muestra tu perfil profesional y experiencia, como un CV digital.">Presentación</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mx-1 area-notifacion d-flex justify-content-center align-items-center gap-2">
            <span title="Perfil" data-bs-placement="bottom" data-bs-toggle="tooltip">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" alt="Perfil"
                    id="icon-perfil">
                    <g transform="translate (0.1 0.1) scale(1)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM15 9C15 10.6569 13.6569 12 12 12C10.3431 12 9 10.6569 9 9C9 7.34315 10.3431 6 12 6C13.6569 6 15 7.34315 15 9ZM12 20.5C13.784 20.5 15.4397 19.9504 16.8069 19.0112C17.4108 18.5964 17.6688 17.8062 17.3178 17.1632C16.59 15.8303 15.0902 15 11.9999 15C8.90969 15 7.40997 15.8302 6.68214 17.1632C6.33105 17.8062 6.5891 18.5963 7.19296 19.0111C8.56018 19.9503 10.2159 20.5 12 20.5Z"
                            fill="#fff" />
                    </g>
                </svg>
            </span>
            <span title="Notificaciones" data-bs-placement="bottom" data-bs-toggle="tooltip">
                <svg id="icon-alerta" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">

                    <!-- Campana -->
                    <path d="M32 56c4 0 7-3 7-7H25c0 4 3 7 7 7z" fill="#ffffff" />

                    <path d="M48 44H16l4-6V28c0-8 5-14 12-14s12 6 12 14v10l4 6z"
                        fill="#ffffff"
                        stroke="#ffffff"
                        stroke-width="2"
                        stroke-linejoin="round" />

                    <!-- Punto rojo de notificación -->
                    <circle cx="48" cy="16" r="8" fill="none" />

                </svg>
            </span>
        </div>
    </header>
    <main id="contenido-main">
    </main>
    <footer>

    </footer>
</body>

</html>