<?php
require_once __DIR__ . '/../../backend/auth_token.php';
require_once __DIR__ . '/../../backend/remem_token.php';

// Si NO está vigente Y TAMPOCO está activa, para afuera
if ($estado_auth['autenticacion'] == 'vigente' || $remem_auth['autenticacion'] == 'activa') {
    header("Location: ../paginas/seleccion.php");
    exit;
}

require_once __DIR__ . '/../../backend/toke_crsf.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <!-- Responsive correcto -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <title>Inicio de sesión | Stylo Camión</title>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="StyloCamión" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- SEO / Indexación -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Accede a tu cuenta de Stylo Camión.">

    <!-- Seguridad -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <!-- Color barra navegador mobile -->
    <meta name="theme-color" content="#1fa3d6">

    <!-- Preload opcional (si querés optimizar) -->
    <link rel="preload" href="../activos/css/login/login.css" as="style">
    <link rel="preload" href="../activos/scripts-js/login/login.js" as="script">

    <!-- Librerías -->
    <link rel="stylesheet" href="../activos/libs/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="../activos/libs/jquery-3.7.1.min.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/activos/css/login/login.css">

    <!-- JS -->
    <script src="../activos/scripts-js/login/login.js" defer></script>

    <!-- PRELOAD -->
    <link rel="preload" href="/activos/imgs/login/background/Camion-Login.png" as="image">
</head>

<body>
    <img src="/activos/imgs/login/background/Camion-Login.png" alt="" aria-hidden="true" class=" img-background">
    <div class="bg-overlay"></div>
    <main class=" d-flex justify-content-center justify-content-md-start align-items-center p-4 p-md-5 ">
        <form action="POST" class=" login-container d-grid justify-content-center py-3 px-5 mx-md-5 rounded rounded-4">
            <div class=" d-flex justify-content-center pb-4">
                <img src="/activos/imgs/login/img/Logo-ALT.webp" class=" img-logo rounded rounded-3" alt="" aria-hidden="true">
            </div>
            <div class=" d-grid text-center bloque-superior">
                <h1>Iniciar Sesión</h1>
                <div class=" divisor">
                    <span class=" text-center"> Accede a tu cuenta </span>
                </div>
            </div>
            <div class=" d-grid gap-3 py-3">
                <span class=" form-control d-flex justify-content-center align-items-center gap-1">
                    <svg class="flex-shrink-0" viewBox="0 0 24 24" aria-label="Email" fill="#faff00" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4-8 5-8-5V6l8 5 8-5z" />
                    </svg>
                    <input type="email" name="" id="" class=" p-2" placeholder="Ingrese su correo" required>
                </span>
                <span class=" form-control d-flex justify-content-center align-items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#faff00">
                        <path d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h40v-80q0-83 58.5-141.5T480-920q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm296.5-143.5Q560-327 560-360t-23.5-56.5Q513-440 480-440t-56.5 23.5Q400-393 400-360t23.5 56.5Q447-280 480-280t56.5-23.5ZM360-640h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240-160v-400 400Z" />
                    </svg>
                    <input type="password" name="" id="" class=" p-2" placeholder="Contraseña" required>
                </span>
            </div>
            <div class=" d-flex flex-wrap justify-content-between py-2 gap-3 bloque-medio-inferior">
                <span class=" d-flex justify-content-center align-items-center gap-2">
                    <input type="checkbox" name="" id="" class=" input-checkbox rounded rounded-2">
                    Recordarme
                </span>
                <a href="">¿Olvidaste tu Contraseña?</a>
            </div>
            <button class=" btn btn-login p-2 my-3"> Iniciar Sesión </button>
            <div class=" divisor bloque-inferior mb-3">
                <span class=" text-center"> O inicia con </span>
            </div>
            <div>
                <button type="button" class=" btn btn-google justify-content-center align-items-center d-flex gap-2">
                    <svg viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.75,16A7.7446,7.7446,0,0,1,8.7177,18.6259L4.2849,22.1721A13.244,13.244,0,0,0,29.25,16" fill="#00ac47" />
                        <path d="M23.75,16a7.7387,7.7387,0,0,1-3.2516,6.2987l4.3824,3.5059A13.2042,13.2042,0,0,0,29.25,16" fill="#4285f4" />
                        <path d="M8.25,16a7.698,7.698,0,0,1,.4677-2.6259L4.2849,9.8279a13.177,13.177,0,0,0,0,12.3442l4.4328-3.5462A7.698,7.698,0,0,1,8.25,16Z" fill="#ffba00" />
                        <polygon fill="#2ab2db" points="8.718 13.374 8.718 13.374 8.718 13.374 8.718 13.374" />
                        <path d="M16,8.25a7.699,7.699,0,0,1,4.558,1.4958l4.06-3.7893A13.2152,13.2152,0,0,0,4.2849,9.8279l4.4328,3.5462A7.756,7.756,0,0,1,16,8.25Z" fill="#ea4435" />
                        <polygon fill="#2ab2db" points="8.718 18.626 8.718 18.626 8.718 18.626 8.718 18.626" />
                        <path d="M29.25,15v1L27,19.5H16.5V14H28.25A1,1,0,0,1,29.25,15Z" fill="#4285f4" />
                    </svg>
                    <span>Google</span>
                </button>
            </div>
            <div class=" divisor-completo my-3"></div>
            <div class=" bloque-registro d-flex justify-content-center">
                <a href="">Registrarse Aquí</a>
            </div>
        </form>
    </main>
</body>

</html>