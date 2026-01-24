<?php
require_once __DIR__ . '/../../backend/auth_token.php';
if ($estado_auth['autenticacion'] == 'vigente') {
    header("Location: ../index.php");
    exit;
}
require_once __DIR__ . '/../../backend/toke-crsf.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Stylo Camión | Transporte confiable y soluciones logísticas</title>
    <link rel="shortcut icon" href="../activos/favicon.png" type="image/png">
    <!-- Libreias -->
    <link rel="stylesheet" href="../activos/libs/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="../activos/libs/jquery-3.7.1.min.js"></script>

    <!-- JS -->
    <script src="../activos/scripts-js/login/login.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../activos/css/login/login.css">
</head>

<body>
    <main>
        <div id="fondo1"></div>
        <div id="cont-formulario" class="d-flex justify-content-center align-items-center">
            <form action="POST" id="formulario" class="d-flex flex-column p-5">
                <span class="mb-2" id="titulo-form">Inicia Sesión en tu cuenta</span>
                <div class="d-flex flex-column mb-3">
                    <label for="input_usuario" id="label_usuario" class=" mb-2">Email</label>
                    <input type="email" name="email" id="input_usuario" placeholder="Ingrese su correo" required>
                </div>
                <div class="d-flex flex-column mb-3">
                    <label for="input_pass" id="label_pass" class=" mb-2">Contraseña</label>
                    <input type="password" name="pass" id="input_pass" placeholder="Ingrese su contraseña" required>
                </div>
                <span id="checkbox-recordar"><input type="checkbox" name="" class="me-2">Recordar este dispositivo</span>
                <input type="submit" value="Iniciar Sesión" id="boton-login">
                <button id="boton-registrarse">Registrarse</button>
                <hr>
                <div>
                    <button class="d-flex justify-content-center align-items-center" type="submit" id="boton-google">
                        <svg class=" me-2" id="icon-google" viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.75,16A7.7446,7.7446,0,0,1,8.7177,18.6259L4.2849,22.1721A13.244,13.244,0,0,0,29.25,16"
                                fill="#00ac47" />
                            <path
                                d="M23.75,16a7.7387,7.7387,0,0,1-3.2516,6.2987l4.3824,3.5059A13.2042,13.2042,0,0,0,29.25,16"
                                fill="#4285f4" />
                            <path
                                d="M8.25,16a7.698,7.698,0,0,1,.4677-2.6259L4.2849,9.8279a13.177,13.177,0,0,0,0,12.3442l4.4328-3.5462A7.698,7.698,0,0,1,8.25,16Z"
                                fill="#ffba00" />
                            <polygon fill="#2ab2db" points="8.718 13.374 8.718 13.374 8.718 13.374 8.718 13.374" />
                            <path
                                d="M16,8.25a7.699,7.699,0,0,1,4.558,1.4958l4.06-3.7893A13.2152,13.2152,0,0,0,4.2849,9.8279l4.4328,3.5462A7.756,7.756,0,0,1,16,8.25Z"
                                fill="#ea4435" />
                            <polygon fill="#2ab2db" points="8.718 18.626 8.718 18.626 8.718 18.626 8.718 18.626" />
                            <path d="M29.25,15v1L27,19.5H16.5V14H28.25A1,1,0,0,1,29.25,15Z" fill="#4285f4" />
                        </svg>
                        <span>Iniciar Sesión con Google</span>
                    </button>
                </div>
                <input type="hidden" name="crsf" value="<?= $crsf_token ?>">
            </form>
        </div>
        <div id="fondo2"></div>
    </main>
</body>

</html>