<?php

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';

require './database/db_conect.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
$reg=$resultado->fetch_assoc();

echo '<ul>
        <li>Identificador: ' .$reg['id'].'<li>
        <li>Nombre del plato: ' .$reg['titulo'].'<li>
        <li>Numero de comensales: ' .$reg['comensales'].'<li>
        <li>Tipo de plato: ' .$reg['tipo'].'<li>
    </ul>';

?>