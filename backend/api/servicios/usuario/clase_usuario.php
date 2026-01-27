<?php
define('BASE_PATH', dirname(__DIR__, 4));
require_once(BASE_PATH . '/config/mysql_connect.php');

class Usuario
{
    private int $id;
    private string $nombreUsuario;
    private string $email;
    private string $contrasenia;
    private string $numeroContacto;
    private string $documentoIdentidad;
    private array $direccion;

    /*
        *   Constructor de la clase
        *   @param string $nombreUsuario Nombre del usuario
        *   @param string $email Correo del usuario
        *   @param string $contrasenia Contraseña en texto plano 
        *   @param string $numeroContacto Numero de telefono del usuario
        *   @param string $documentoIdentidad Numero de documento del usuario
        *   @param string $direccion Texto plano o conjunto de textos planos en un array sobre las direcciones del usuario
    */

    public function __construct(string $nombreUsuario, string $email, string $contrasenia, string $numeroContacto, string $documentoIdentidad, array $direccion)
    {
        $this->nombreUsuario = $this->sanitizarString($nombreUsuario);
        $this->email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $this->contrasenia = password_hash($this->sanitizarString($contrasenia), PASSWORD_BCRYPT, ['cost' => 12]);
        $this->numeroContacto = $this->sanitizarString($numeroContacto);
        $this->documentoIdentidad = $this->sanitizarString($documentoIdentidad);
        $this->direccion = array_map([$this, 'sanitizarString'], $direccion);
    }

    private function sanitizarString(string $input): string
    {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

    public function crearUsuario()
    {
        try {
            global $conn;
            $consulta = $conn->prepare('SELECT email FROM usuarios WHERE email = ?');
            $consulta->bind_param('s', $this->email);
            $consulta->execute();
            $filas = $consulta->get_result();
            $filas = $filas->num_rows;

            if ($filas > 0) {
                $consulta->close();
                return ['estado' => false, 'mensaje' => 'Este correo no se encuentra disponible para su uso'];

            } else {
                $conn->begin_transaction();
                $consulta = $conn->prepare(
                    'INSERT INTO usuarios 
                (nombreUsuario, contrasenia, ultimoAcceso, email, numeroContacto, documentoIdentidad)
                VALUES (?, ?, ?, ?, ?, ?);'
                );
                $timestamp = date("Y-m-d H:i:s");
                $consulta->bind_param(
                    'ssssss',
                    $this->nombreUsuario,
                    $this->contrasenia,
                    $timestamp,
                    $this->email,
                    $this->numeroContacto,
                    $this->documentoIdentidad
                );

                $consulta->execute();

                //Comprobacion si realmente hubo tablas afectadas
                $filasAfectadas = $consulta->affected_rows ?? 0;
                if ($filasAfectadas > 0) {
                    //Finalizacion *
                    $conn->commit();
                    $consulta->close();
                    return ['estado' => true, 'mensaje' => 'Usuario registrado correctamente'];
                    //------------ *
                } else {
                    $conn->rollback();
                    $consulta->close();
                    return false;
                }
            }
        } catch (mysqli_sql_exception $e) {
            $conn->rollback();
            error_log("Error al insertar crear el usuario: " . $e->getMessage());
        }
    }
}
