<?php
$nombre_Usuario = $datos['usuario'] ?? false;
$email_Usuario = $datos['email'] ?? false;
$contrasenia_Usuario = $datos['pass'] ?? false;
$recontra_Usuario = $datos['repass'] ?? false;
$telefono_Usuario = $datos['telefono'] ?? false;
$documento_Usuario = $datos['cdi'] ?? false;
$crsf = $datos['crsf'] ?? '';

session_start();
if (isset($_SESSION['crsf_token']) && hash_equals($_SESSION['crsf_token'], $crsf)) {
    require_once __DIR__ . '/clase_usuario.php';

    if (!$nombre_Usuario && !$email_Usuario && !$contrasenia_Usuario && !$recontra_Usuario) {
        $respuesta = 'Porfavor, ingrese los campos remarcados en rojo';
    } else {
        if ($contrasenia_Usuario === $recontra_Usuario) {
            $nuevo_Usuario = new Usuario($nombre_Usuario, $email_Usuario, $contrasenia_Usuario, $telefono_Usuario, $documento_Usuario, ['']);
            $estado = $nuevo_Usuario->crearUsuario();

            if (!$estado['estado']) {
                $respuesta = $estado['mensaje'];

            } elseif ($estado) {
                $respuesta = ['estado' => true,'mensaje' => $estado['mensaje']];
            } else {
                $respuesta = $estado['mensaje'];

            }
        } else {
            $respuesta = "Debe ingresar contraseñas iguales";
        }
    }
} else {
    $respuesta = 'Error, sucedio algo inesperado';
}
