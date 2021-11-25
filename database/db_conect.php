<?php

function conectar(){
    $mysqli = new mysqli("172.16.9.44:6667", "root", "root", "restaurante");
    if ($mysqli->connect_errno) {
        echo "Fallo la conexion con MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connecr_errno;
    }
    return $mysqli;
}

?>