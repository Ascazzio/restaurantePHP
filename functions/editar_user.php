<?php

require './database/db_conect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM usuario WHERE Usuario_ID=".$_GET["id"]);
$reg=$resultado->fetch_assoc();

if (isset($_POST['editar'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];

    $resultado = $mysqli->query("UPDATE usuario SET Nombre='$nombre', Apellidos='$apellido', Correo='$correo' WHERE Usuario_ID=".$_GET["id"]); 
    header('location: users.php');
}

echo 
    '<form action="" method="post">
        <table>
            <tr>
                <td>Nombre: </td>   
                <td><input type="text" name="nombre" value='.$reg['Nombre'].'></td>
            </tr>
            <tr>
                <td>Apellido: </td>   
                <td><input type="text" name="apellido" value='.$reg['Apellidos'].'></td>
            </tr>
            <tr>
                <td>Correo: </td>   
                <td><input type="text" name="correo" value='.$reg['Correo'].'></td>
            </tr>
        </table>
    <p><input type="submit" name="editar" value="Editar"></p>
    </form>';
?>