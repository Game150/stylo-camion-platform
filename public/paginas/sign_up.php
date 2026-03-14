<?php
require_once __DIR__ . '/../../backend/auth_token.php';
require_once __DIR__ . '/../../backend/remem_token.php';
require_once __DIR__ . '/../../backend/toke_crsf.php';

// En signin.php (Si ya tiene sesión, no necesita registrarse)
if ($estado_auth['autenticacion'] == 'vigente' || $remem_auth['autenticacion'] == 'activa') {
    header("Location: ../paginas/seleccion.php");
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
    <meta name="robots" content="noindex, nofollow, noarchive">
    <meta name="description" content="Crea tu cuenta en Stylo Camión y comienza a utilizar la plataforma de transporte de cargas.">

    <title>Registro | Stylo Camión</title>

    <!-- Canonical -->
    <link rel="canonical" href="https://stylocamion.com/registro">

    <!-- Favicons -->
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Preload -->
    <link rel="preload" href="/activos/css/sign_up/sign_up.css" as="style">
    <link rel="preload" href="/activos/scripts-js/sign_up/sign_up.js" as="script">


    <!-- Librerías -->
    <link rel="stylesheet" href="/activos/libs/bootstrap-5.3.8-dist/css/bootstrap.min.css">
    <script src="/activos/libs/jquery-3.7.1.min.js" defer></script>

    <!-- CSS -->
    <link rel="stylesheet" href="/activos/css/sign_up/sign_up.css">

    <!-- JS -->
    <script src="/activos/scripts-js/sign_up/sign_up.js" defer></script>

</head>

<body>
    <main class=" d-flex flex-column flex-md-row ">
        <section class=" panel-izquierdo d-none d-md-flex flex-md-column">
            <div class="cont-titulo-left align-items-md-center text-center d-md-grid p-1">
                <h1 class="mb-0">Empieza facil con StyoCamión</h1>
            </div>
            <img src="/activos/imgs/index/iconos/Logo-recortado.svg" alt="" class="img-logo mx-auto">
        </section>
        <section class=" panel-derecho d-flex flex-column justify-content-center align-items-center py-5">
            <div class="cont-titulo-parrafo-right">
                <h2>Crea tu cuenta en segundos</h2>
                <p>Crea tu cuenta y simplifica tu trabajo y encuentra cargas en segundos.</p>
            </div>
            <form action="" method="post" class=" formulario rounded rounded-4 d-flex flex-wrap justify-content-start p-4 gap-3">
                <div class=" cont-inputs">
                    <label for="nombre">Primer Nombre</label>
                    <input type="text" id="nombre" name="nombre" class=" form-control p-3 shadow-sm" placeholder="Ingresa tu nombre" required>
                </div>
                <div class=" cont-inputs">
                    <label for="apellido">Apellido <span>(Opcional)</span></label>
                    <input type="text" id="apellido" name="apellido" class=" form-control p-3 shadow-sm" placeholder="Ingresa tu apellido">
                </div>
                <div class=" cont-inputs">
                    <label for="país">País</label>
                    <select name="país" id="país" class=" form-select p-3 shadow-sm" required>
                        <option value="">Eliga un país</option>
                    </select>
                </div>
                <div class=" cont-inputs">
                    <label for="correo">Correo electronico</label>
                    <input type="text" id="correo" name="correo" class=" form-control p-3 shadow-sm" placeholder="Ingresa tu correo" required>
                </div>
                <div class=" cont-inputs">
                    <label for="pass">Contraseña</label>
                    <input type="password" id="pass" name="pass" class=" form-control p-3 shadow-sm" placeholder="Ingresa tu contraseña" required>
                </div>
                <div class=" cont-inputs">
                    <label for="repass">Confirmar contraseña</label>
                    <input type="password" id="repass" name="repass" class=" form-control p-3 shadow-sm" placeholder="Repita la contraseña" required>
                </div>
                <input type="text" name="crsf" value="<?php echo $crsf_token; ?>" hidden>
            </form>
            <div class=" d-flex justify-content-start cont-condiciones mt-4">
                <span class=" d-flex align-items-center gap-2">
                    <input type="checkbox" name="condiciones" id="condiciones" class=" rounded rounded-2">
                    Aceptar <a href="#">términos y condiciones</a>
                </span>
            </div>
            <div class=" d-flex cont-btns justify-content-between flex-wrap gap-3 my-3">
                <button type="submit" class=" btn btn-registrarse p-3">Registrarse</button>
                <button type="button" class=" btn btn-login p-3">Iniciar Sesión</button>
            </div>
        </section>
    </main>
</body>

</html>