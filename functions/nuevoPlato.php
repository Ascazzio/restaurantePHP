<?php

require '../database/db_conect.php';
require './header.php';
$mysqli = conectar();

$titulo = "";
$comensales = 0;
$tipo = "";

if (isset($_POST['guardar'])) {
    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $comensales = $_POST['comensales'];

    $resultado = $mysqli->query("INSERT INTO plato (titulo, tipo, comensales) VALUES ('$titulo', '$tipo', '$comensales')"); 
    header('location: index.php');
}

cabeceraAdmin();

echo 
    '
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <form action="" method="post">
        <table>
            <tr>
                <td>Nombre de plato: </td>   
                <td><input type="text" name="titulo" /></td>
            </tr>
            <tr>
                <td>Numero de comensales: </td>   
                <td><input type="text" name="comensales" /></td>
            </tr>
            <tr>
                <td>Tipo de plato: </td>   
                <td><input type="text" name="tipo" /></td>
            </tr>
        </table>
    <p><input type="submit" name="guardar" value="Anadir"/></p>
    </form>
    
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