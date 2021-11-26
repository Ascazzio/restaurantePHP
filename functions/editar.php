<?php

require './database/db_conect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM plato WHERE Plato_id=".$_GET["id"]);
$reg=$resultado->fetch_assoc();

if (isset($_POST['editar'])) {
    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $comensales = $_POST['comensales'];
    $image = $_POST['image'];

    $resultado = $mysqli->query("UPDATE plato SET titulo='$titulo', tipo='$tipo', comensales='$comensales' WHERE Plato_id=".$_GET["id"]); 
    header('location: index.php');
}

echo 
    '<form action="" method="post">
        <table>
            <tr>
                <td>Nombre de plato: </td>   
                <td><input type="text" name="titulo" value='.$reg['titulo'].'></td>
            </tr>
            <tr>
                <td>Numero de comensales: </td>   
                <td><input type="text" name="comensales" value='.$reg['comensales'].'></td>
            </tr>
            <tr>
                <td>Tipo de plato: </td>   
                <td><input type="text" name="tipo" value='.$reg['tipo'].'></td>
            </tr>
            <tr>
                <td>Link de imagen: </td>   
                <td><input type="text" name="image" value='.$reg['image'].'></td>
            </tr>
        </table>
    <p><input type="submit" name="editar" value="Editar"></p>
    </form>';
?>