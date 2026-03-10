<?php
define('BASE_PATH', dirname(__DIR__, 4));
require_once(BASE_PATH . '/config/mysql_connect.php');

class Usuario
{
    private int $id;
    private string $nacionalidad;
    private string $nombreUsuario;
    private string $apellidoUsuario;
    private string $email;
    private string $contraseña;
    private string $numeroContacto;
    private string $documentoIdentidad;

    /*
        *   Constructor de la clase
        *   @param string $nacionalidad país del usuario
        *   @param string $nombreUsuario Nombre del usuario
        *   @param string $apellidoUsuario apellido del usuario
        *   @param string $email Correo del usuario
        *   @param string $contraseña Contraseña en texto plano 
        *   @param string $numeroContacto Numero de telefono del usuario
        *   @param string $documentoIdentidad Numero de documento del usuario
    */

    public function __construct(string $nacionalidad, string $nombreUsuario, string $apellidoUsuario, string $email, string $contrasenia, string $numeroContacto, string $documentoIdentidad)
    {
        $this->nacionalidad = $this->sanitizarString($nacionalidad);
        $this->nombreUsuario = $this->sanitizarString($nombreUsuario);
        $this->apellidoUsuario = $this->sanitizarString($apellidoUsuario);
        $this->email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $this->contraseña = password_hash($this->sanitizarString($contrasenia), PASSWORD_BCRYPT, ['cost' => 12]);
        $this->numeroContacto = $this->sanitizarString($numeroContacto);
        $this->documentoIdentidad = $this->sanitizarString($documentoIdentidad);
    }

    private function sanitizarString(string $input): string
    {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

    public function crearUsuario()
    {
        if (!$this->email) {
            return [
                'estado'   => false,
                'contexto' => 'emailInvalido',
                'mensaje'  => 'Correo electrónico inválido'
            ];
        }
        try {
            global $conn;
            $select = $conn->prepare('SELECT email FROM usuario WHERE email = ?');
            $select->bind_param('s', $this->email);
            $select->execute();
            $filas = $select->get_result();
            $filas = $filas->num_rows;
            $select->close();


            if ($filas > 0) {
                return ['estado' => false, 'contexto' => 'emailDisponible', 'mensaje' => 'Este correo no se encuentra disponible para su uso'];
            } else {
                $conn->begin_transaction();
                $insert = $conn->prepare(
                    'INSERT INTO usuario
                    (nombreUsuario, apellido,contrasenia, ultimoAcceso, email, numeroContacto, documentoIdentidad)
                    VALUES (?, ?, ?, ?, ?, ?, ?);'
                );
                $timestamp = date("Y-m-d H:i:s");
                $insert->bind_param(
                    'sssssss',
                    $this->nombreUsuario,
                    $this->apellidoUsuario,
                    $this->contraseña,
                    $timestamp,
                    $this->email,
                    $this->numeroContacto,
                    $this->documentoIdentidad
                );

                $insert->execute();

                //Comprobacion si realmente hubo tablas afectadas
                $filasAfectadas = $insert->affected_rows ?? 0;
                if ($filasAfectadas > 0) {
                    //Finalizacion *
                    $conn->commit();
                    $insert->close();
                    return ['estado' => true, 'contexto' => 'usuarioCreado', 'mensaje' => 'Usuario registrado correctamente'];
                    //------------ *
                } else {
                    $conn->rollback();
                    $insert->close();
                    return ['estado' => false, 'contexto' => 'usuarioCreado', 'mensaje' => 'No se pudo crear el usuario'];
                }
            }
        } catch (mysqli_sql_exception $e) {
            $conn->rollback();
            error_log("Error al insertar crear el usuario: " . $e->getMessage());
        }
    }

    public function actualizarNacionalidad()
    {
        try {
            global $conn;
            //busca la idNacionalidad por el codigo ISO
            $consulta = $conn->prepare('SELECT idNacionalidad FROM nacionalidad WHERE codigoISO = ?');
            $consulta->bind_param('s', $this->nacionalidad);
            $consulta->execute();
            $resultado = $consulta->get_result();
            $consulta->close();


            if ($resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                $IDnacionalidad = $fila['idNacionalidad'];

                // Actualizar usuario
                $conn->begin_transaction();
                $update = $conn->prepare('UPDATE usuario SET fg_idNacionalidad = ? WHERE email = ?');
                $update->bind_param('is', $IDnacionalidad, $this->email);
                $update->execute();


                if ($update->affected_rows > 0) {
                    $conn->commit();
                    $update->close();
                    return ['estado' => true, 'contexto' => 'actualizarNacionalidad', 'mensaje' => 'Nacionalidad actulizada con exito'];
                } else {
                    $conn->rollback();
                    $update->close();
                    return ['estado' => false, 'contexto' => 'actualizarNacionalidad', 'mensaje' => 'No se actualizo la nacionalidad del usuario'];
                }
            } else {
                return ['estado' => false, 'contexto' => 'nacionalidadExistente', 'mensaje' => 'No se encontro la nacionalidad mencionada'];
            }
        } catch (mysqli_sql_exception $e) {
            $conn->close();
            error_log("Error al actualizar la nacionalidad: " . $e->getMessage());
        }
    }
}
