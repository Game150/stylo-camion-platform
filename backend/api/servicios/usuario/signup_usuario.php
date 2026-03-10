<?php
$nombre_Usuario = $datos['nombre'] ?? false;
$apellido_Usuario = $datos['apellido'] ?? false;
$nacionalidad_Usuario = $datos['país'] ?? false;
$correo_Usuario= $datos['correo'] ?? false;
$contraseña = $datos['pass'] ?? false;
$recontra = $datos['repass'] ?? false;
$condiciones = $datos['condiciones'] ?? false;
$crsf = $datos['crsf'] ?? '';

session_start();
if (isset($_SESSION['crsf_token']) && hash_equals($_SESSION['crsf_token'], $crsf)) {
    require_once __DIR__ . '/clase_usuario.php';

    if (!$nombre_Usuario || !$nacionalidad_Usuario || !$correo_Usuario || !$contraseña || !$recontra) {
        $respuesta = 'Porfavor, ingrese la mayoria de los campos';
    } else {
        if ($condiciones == 1) {
            if ($contraseña === $recontra) {
                $nuevo_Usuario = new Usuario($nacionalidad_Usuario, $nombre_Usuario, $apellido_Usuario, $correo_Usuario, $contraseña, '','');
                $estado = $nuevo_Usuario->crearUsuario();
                if($estado['contexto'] == 'emailInvalido' && !$estado['estado']) {
                    $respuesta = $estado['mensaje'];
                }
                
                if($estado['contexto'] == 'emailDisponible' && !$estado['estado']) {
                    $respuesta = $estado['mensaje'];

                } else {
                    if($estado['contexto'] == 'usuarioCreado' && $estado['estado']) {
                        $estado = $nuevo_Usuario->actualizarNacionalidad();
                        if($estado['contexto'] == 'nacionalidadExistente' && !$estado['estado']){
                            $respuesta = $estado['mensaje'];
                        } else {
                            if ($estado['contexto'] == 'actualizarNacionalidad' && $estado['estado']) {
                                $respuesta = ['estado' => true,'mensaje' => 'Se registro el usuario correctamente'];
                            } else {
                                $respuesta = $estado['mensaje'];
                            }
                        }

                    } else {
                        $respuesta = $estado['mensaje'];
                    }
                    
                }

            } else {
                $respuesta = "Debe ingresar contraseñas iguales";
            }
        } else {
            $respuesta = "Tiene que aceptar los terminos y condiciónes";
        }
    }
} else {
    $respuesta = 'Error, sucedio algo inesperado';
}
