<?php
require_once __DIR__ . '/../../backend/auth_token.php';
require_once __DIR__ . '/../../backend/remem_token.php';
if ($estado_auth['autenticacion'] == 'vigente') {
    header("Location: ../paginas/seleccion.php");
    exit;
}

if ($remem_auth['autenticacion'] == 'activa') {
    header("Location: ../paginas/seleccion.php");
    exit;
}
require_once __DIR__ . '/../../backend/toke_crsf.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="height=device-height, width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Stylo Camión | Transporte confiable y soluciones logísticas</title>
    <link rel="icon" href="/activos/favicon.ico" type="image/x-icon">
    <!-- Libreias -->
    <link rel="stylesheet" href="../activos/libs/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="../activos/libs/jquery-3.7.1.min.js"></script>

    <!-- JS -->
    <script src="../activos/scripts-js/signin/signin.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../activos/css/signin/signin.css">
</head>

<body>
    <main>
        <div id="fondo1"></div>
        <button type="button" id="boton-regresar">
            <svg xmlns="http://www.w3.org/2000/svg" id="icon-regresar" height="24px" viewBox="0 -960 960 960" width="24px">
                <path d="m480-320 56-56-64-64h168v-80H472l64-64-56-56-160 160 160 160Zm0 240q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
            </svg>
        </button>
        <div id="cont-formulario" class="d-flex justify-content-center align-items-center">
            <form action="POST" id="formulario" class="d-flex flex-column p-5">
                <span id="titulo-form">Registrarse como usuario</span>
                <span id="obligatorio">*importante* en rojo es obligatorio</span>
                <div class="d-flex flex-column mb-3">
                    <label for="input_usuario" id="label_usuario" class=" mb-2">Usuario</label>
                    <input type="text" name="usuario" id="input_usuario" placeholder="Ingrese su nombre de usuario" required minlength="4" maxlength="20">
                </div>
                <div class="d-flex flex-column mb-3">
                    <label for="input_email" id="label_email" class=" mb-2">Email</label>
                    <input type="email" name="email" id="input_email" placeholder="Ingrese su correo" required autocomplete="email">
                </div>
                <div class="d-flex flex-column mb-3">
                    <label for="input_pass" id="label_pass" class=" mb-2">Contraseña</label>
                    <input type="password" name="pass" id="input_pass" placeholder="Ingrese su contraseña" required minlength="8" pattern="^(?=.*[!@#$%^&*]).+$" title="La contraseña debe tener al menos 8 caracteres e incluir un símbolo especial como por ejemplo: !@#$%^&*">
                </div>
                <div class="d-flex flex-column mb-3">
                    <label for="input_repass" id="label_repass" class=" mb-2">Repetir contraseña</label>
                        <input type="password" name="repass" id="input_repass" placeholder="Vuelva a ingresar su contraseña" required minlength="8">
                </div>
                <div class="d-flex flex-column mb-3">
                    <label for="input_telefono" id="label_telefono" class=" mb-2">Contacto</label>
                    <input type="tel" name="telefono" id="input_telefono" placeholder="Ingrese su numero de contacto" minlength="8" maxlength="15">
                </div>
                <div class="d-flex flex-column mb-3">
                    <label for="input_cdi" id="label_cdi" class=" mb-2">Documento Identidad</label>
                    <input type="number" name="cdi" id="input_cdi" placeholder="Ingrese su numero de documento">
                </div>
                <input type="submit" value="Registrarse" id="boton-registrarse" class="mb-3">
                <input type="hidden" name="crsf" value="<?= $crsf_token ?>">
            </form>
        </div>
        <div id="fondo2"></div>
    </main>
</body>

</html>