<?php
$email_Usuario = $datos['email'] ?? '';
$contrasenia_Usuario = $datos['contraseña'] ?? '';
$crsf = $datos['crsf'] ?? '';

session_start();
if (isset($_SESSION['crsf_token']) && hash_equals($_SESSION['crsf_token'], $crsf)) {
    if (!empty($email_Usuario) && !empty($contrasenia_Usuario) && !empty($crsf)) {
        $email_Usuario = filter_var($email_Usuario, FILTER_VALIDATE_EMAIL);

        if ($email_Usuario === false) {
            $respuesta = 'Email inválido';
        } else {

            define('BASE_PATH', dirname(__DIR__, 4));
            require_once(BASE_PATH . '/config/mysql_connect.php');

            if ($conn_ok) {
                try {
                    $consulta = $conn->prepare('SELECT email, idUsuario, contrasenia FROM usuario WHERE email = ?');
                    $consulta->bind_param("s", $email_Usuario);
                    $consulta->execute();

                    $resultado = $consulta->get_result();
                    $usuario = $resultado->fetch_assoc();

                    function guardarInicio()
                    {   global $conn, $email_Usuario;
                        $consulta = $conn->prepare('UPDATE usuario SET ultimoAcceso = ? WHERE email = ?');
                        $fechaHora = date('Y-m-d H:i:s');
                        $consulta->bind_param("ss", $fechaHora, $email_Usuario);
                        $consulta->execute();
                    }

                    if (!empty($usuario) && password_verify($contrasenia_Usuario, $usuario['contrasenia'])) {
                        if (isset($datos['recordar']) && $datos['recordar'] === 'on') {
                            $id = $usuario['idUsuario'];
                            $respuesta = ['estado' => true, 'mensaje' => 'Usuario Confirmado'];
                            guardarInicio();
                            require_once(BASE_PATH . '/backend/create_remem.php');
                        } else {
                            $id = $usuario['idUsuario'];
                            $respuesta = ['estado' => true, 'mensaje' => 'Usuario Confirmado'];
                            guardarInicio();
                            require_once(BASE_PATH . '/backend/create_auth.php');
                        }
                    } else {
                        $respuesta = 'Usuario no encontrado o contraseña incorrecta ';
                    }
                    $consulta->close();
                    $conn->close();
                } catch (Exception $e) {
                    $respuesta = 'Sucedio algo durante la del comprobación de usuario ';
                }
            } else {
                $respuesta = 'Actualmente la base de datos no se encuentra operativa';
            }
        }
    } else {
        $respuesta = 'Debe ingresar valores';
    }
} else {
    $respuesta = 'Error, sucedio algo inesperado';
}
