<?php
ob_start();
?>

<?php

require '../database/db_conect.php';
require './header.php';
$mysqli = conectar();

$titulo = "";
$tipo = "";
$comensales = 0;
$descripcion = "";
$precio = 0;
$ingredientes = "";
$image = "";

if (isset($_POST['guardar'])) {
    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $comensales = $_POST['comensales'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $ingredientes = $_POST['ingredientes'];
    $image = $_POST['image'];

    $resultado = $mysqli->query("INSERT INTO plato (titulo, tipo, comensales, descripcion, precio, ingredientes, image) VALUES ('$titulo', '$tipo', '$comensales', '$descripcion', '$precio', '$ingredientes', '$image')"); 
    header('location: nuevoPlato.php');
}

cabeceraAdmin();

echo 
    '
    <link rel="stylesheet" href="../CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <div class="centrar">
        <form class="mt-2 mb-4 p-5" id="form-horizontal" method="post">
            <table class="mt-5">
                <tr class="col mb-3">
                    <td class="col-sm-3 col-form-label">Nombre de plato: </td>   
                    <td><input type="text" name="titulo" class="form-control mt-2" /></td>
                </tr>
                <tr class="col mb-3">
                    <td class="col-sm-3 col-form-label">Tipo de plato: </td>   
                    <td><input type="text" name="tipo" class="form-control mt-2" /></td>
                </tr>
                <tr class="col mb-3">
                    <td class="col-sm-3 col-form-label">Numero de comensales: </td>   
                    <td><input type="number" name="comensales" class="form-control mt-2" /></td>
                </tr>
                <tr class="col mb-3">
                    <td class="col-sm-3 col-form-label">Descripcion: </td>   
                    <td><input type="text" name="descripcion" class="form-control mt-2" /></td>
                </tr>
                <tr class="col mb-3">
                    <td class="col-sm-3 col-form-label">Precio: </td>   
                    <td><input type="number" name="precio" class="form-control mt-2" /></td>
                </tr>
                <tr class="col mb-3">
                    <td class="col-sm-3 col-form-label">Ingredientes: </td>   
                    <td><input type="text" name="ingredientes" class="form-control mt-2" /></td>
                </tr>
                <tr class="col mb-3">
                    <td class="col-sm-3 col-form-label">Imagen: </td>   
                    <td><input type="text" name="image" class="form-control mt-2" /></td>
                </tr>
            </table>
            <input type="submit" name="guardar" class="btn btn-lg btn-outline-warning mt-4" value="Agregar  plato"/>
        </form>
    </div>
    
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2021 geekshubsacademyrestaurant
            </p>
            <a href="" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>   
        </div>';

?>

<?php
ob_end_flush();
?>