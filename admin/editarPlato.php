<?php

require '../database/db_conect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM plato WHERE Plato_id=".$_GET["id"]);
$reg=$resultado->fetch_assoc();

if (isset($_POST['editarPlato'])) {
    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $comensales = $_POST['comensales'];
    $image = $_POST['image'];

    $resultado = $mysqli->query("UPDATE plato SET titulo='$titulo', tipo='$tipo', comensales='$comensales', image='$image' WHERE Plato_id=".$reg['Plato_id']); 
    header('location: platos.php');
}


?>