<?php

// require '../database/db_conect.php';
// $mysqli = conectar();

$nombre = "";
$apellido = "";
$email = "";
$clave = "";

if (isset($_POST['guardar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $resultado = $mysqli->query("INSERT INTO usuario (Nombre, Apellidos, Correo, Clave) VALUES ('$nombre', '$apellido', '$correo', '$clave')"); 
    header('location: users.php');
}

echo 
    '<div class="col-3 bg-secondary bg-opacity-10">
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nombre: </td>   
                    <td><input type="text" name="nombre" /></td>
                </tr>
                <tr>
                    <td>Apellido: </td>   
                    <td><input type="text" name="apellido" /></td>
                </tr>
                <tr>
                    <td>Correo: </td>   
                    <td><input type="email" name="correo" /></td>
                </tr>
                <tr>
                    <td>Clave: </td>   
                    <td><input type="password" name="clave" /></td>
                </tr>
            </table>
        <p><input class="btn btn-primary" type="submit" name="guardar" value="Anadir"/></p>
        </form>
    </div>';

?>