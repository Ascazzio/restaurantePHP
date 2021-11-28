<?php

require '../database/db_conect.php';
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

    require_once( '../functions/header.php');
    cabecera();

echo 
    '<link rel="stylesheet" href="../CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <form class="mt-2 mb-4 p-5" id="form-horizontal"  action="" method="post">
        <table class="mt-5">
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Nombre: </td>   
                <td><input class="form-control mt-2" type="text" name="nombre" value='.$reg['Nombre'].'></td>
            </tr>
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Apellido: </td>   
                <td><input class="form-control mt-2" type="text" name="apellido" value='.$reg['Apellidos'].'></td>
            </tr>
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Correo: </td>   
                <td><input class="form-control mt-2" type="text" name="correo" value='.$reg['Correo'].'></td>
            </tr>
        </table>
    <p><input class="btn btn-lg btn-outline-warning mt-4" type="submit" name="editar" value="Editar"></p>
    </form>
    <footer class="p-5 bg-dark text-white text-center position-relative">
    <div class="container">
        <p class="lead">
            Copyright &copy; 2021 geekshubsacademyrestaurant
        </p>
        
    </div>
</footer>';
?>