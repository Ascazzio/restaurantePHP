<?php

require './database/db_conect.php';
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

echo 
    '<form action="" method="post">
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
    </form>';

?>