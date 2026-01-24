<?php
$email_Usuario = $datos['email'] ?? '';
$contrasenia_Usuario = $datos['pass'] ?? '';
$crsf = $datos['crsf'] ?? '';

session_start();
if (isset($_SESSION['crsf_token']) && hash_equals($_SESSION['crsf_token'], $crsf)) {
    if (!empty($email_Usuario) && !empty($contrasenia_Usuario) && !empty($crsf)) {
        $email_Usuario = filter_var($email_Usuario, FILTER_VALIDATE_EMAIL);

        define('BASE_PATH', dirname(__DIR__, 4));
        require_once(BASE_PATH . '/config/mysql_connect.php');

        try {
            $consulta = $conn->prepare('SELECT email, idUsuario, contrasenia FROM usuarios WHERE email = ?');
            $consulta->bind_param("s", $email_Usuario);
            $consulta->execute();

            $resultado = $consulta->get_result();
            $usuario = $resultado->fetch_assoc();

            if (!empty($usuario)) {
                $id = $usuario['idUsuario'];
                $respuesta = ['Usuario Confirmado'];
                require_once(BASE_PATH . '/backend/createAuth.php');
                $conn->close();

            } else {
                $respuesta = 'Usuario no encontrado o contraseña incorrecta ';

            }
        } catch (Exception $e) {
            $respuesta = 'Sucedio algo durante la del comprobación de usuario '. $e->getMessage();
        }
    } else {
        $respuesta = 'Debe ingresar valore';
    }
} else {
    $respuesta = 'Error, sucedio algo inesperado';
}
