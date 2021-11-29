<?php

echo '<h1>Detalle de ' . ($_GET["titulo"]) . '</h1>';

require '../database/db_conect.php';
$mysqli = conectar();
$resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
$reg=$resultado->fetch_assoc();

echo '
    <link rel="stylesheet" href="../CSS/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <ul>
        <li>Identificador: ' .$reg['id'].'<li>
        <li>Nombre del plato: ' .$reg['titulo'].'<li>
        <li>Numero de comensales: ' .$reg['comensales'].'<li>
        <li>Tipo de plato: ' .$reg['tipo'].'<li>
    </ul>';

?>