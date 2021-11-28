<?php

require '../database/db_conect.php';
$mysqli = conectar();

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

require_once( '../functions/header.php');
    cabecera();

echo 
    '<link rel="stylesheet" href="../CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     
    <form class="mt-2 mb-4 p-5" id="form-horizontal" action="" method="post">
        <table class="mt-5">
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Nombre: </td>   
                <td><input class="form-control mt-2" type="text" name="nombre" placeholder="nombre *"  /></td>
            </tr>
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Apellido: </td>   
                <td><input class="form-control mt-2" type="text" name="apellido" placeholder="apellido *"  /></td>
            </tr>
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Correo: </td>   
                <td><input class="form-control mt-2" type="email" name="correo" placeholder="nombre@ejemplo.com *"  /></td>
            </tr>
            <tr class="col mb-3">
                <td class="col-sm-3 col-form-label">Clave: </td>   
                <td><input class="form-control mt-2" type="password" name="clave" placeholder="clave *" /></td>
            </tr>
        </table>
    <p><input class="btn btn-lg btn-outline-warning mt-4" type="submit" name="guardar" value="Register"/></p>
    </form>
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2021 geekshubsacademyrestaurant
            </p>
            <a href="" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>';

?>