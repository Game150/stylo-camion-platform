<?php
include('toke-crsf.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (!empty($_POST['csrf_token']) && hash_equals($csrf_token, $_POST['csrf_token'])) {
        echo "Usuario Autentico";

        //Regenera la sessión en caso de un intruso tome el id luego de login
        session_regenerate_id(true);
    } else {
        echo "Hacker de mierda";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php //EVITA QUE EL USUARIO INYECTE CODIGO MALICIOSO 
    ?>
    <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <input type="email" name="email" value="nuevo@correo.com">
        <input type="hidden" name="csrf_token" value="<?php echo $csrf_token ?>">
        <button type="submit">Cambiar Email</button>
    </form>
</body>

</html>